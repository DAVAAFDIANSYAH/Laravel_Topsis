<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Alternatif;

class TopsisController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();
        return view('calculate.index', compact('kriterias', 'alternatifs'));
    }

    public function hasil(Request $request)
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();
        $subalternatifs = [];

        foreach ($alternatifs as $alternatif) {
            $nilai = [];
            foreach ($kriterias as $kriteria) {
                $nilai[$kriteria->id] = (float) $request->input("C{$kriteria->id}_A{$alternatif->id}");
            }
            $subalternatifs[$alternatif->id] = $nilai;
        }

        $hasil_topsis = $this->topsis($kriterias, $alternatifs, $subalternatifs);

        return view('topsis.hasil', compact('hasil_topsis'));
    }

    protected function topsis($kriterias, $alternatifs, $subalternatifs)
    {
        // Matriks keputusan
        $decision_matrix = [];
        foreach ($alternatifs as $alternatif) {
            $row = [];
            foreach ($kriterias as $kriteria) {
                $row[] = $subalternatifs[$alternatif->id][$kriteria->id];
            }
            $decision_matrix[] = $row;
        }
        $decision_matrix = array_map(null, ...$decision_matrix);

        // Menghitung Pembagi (Divisor)
        $divisors = [];
        foreach ($decision_matrix as $column) {
            $sum = array_reduce($column, function ($carry, $item) {
                return $carry + pow($item, 2);
            });
            $divisors[] = sqrt($sum);
        }

        // Normalisasi Matriks
        $norm_matrix = [];
        foreach ($decision_matrix as $row) {
            $norm_row = [];
            foreach ($row as $key => $value) {
                $norm_row[] = $value / $divisors[$key];
            }
            $norm_matrix[] = $norm_row;
        }

        // Pembobotan Matriks
        $bobot = [];
        foreach ($kriterias as $kriteria) {
            $bobot[] = $kriteria->bobot;
        }
        $weighted_matrix = [];
        foreach ($norm_matrix as $row) {
            $weighted_row = [];
            foreach ($row as $key => $value) {
                $weighted_row[] = $value * $bobot[$key];
            }
            $weighted_matrix[] = $weighted_row;
        }

        // Menentukan Solusi Ideal Positif (A+) dan Negatif (A-)
        $ideal_positive = [];
        $ideal_negative = [];
        foreach ($kriterias as $index => $kriteria) {
            $column = array_column($weighted_matrix, $index);
            if ($kriteria->jenis == 'benefit') {
                $ideal_positive[] = max($column);
                $ideal_negative[] = min($column);
            } else {
                $ideal_positive[] = min($column);
                $ideal_negative[] = max($column);
            }
        }

        // Menghitung Jarak ke Solusi Ideal Positif (D+) dan Negatif (D-)
        $dist_positive = [];
        $dist_negative = [];
        foreach ($weighted_matrix as $row) {
            $dist_positive[] = sqrt(array_sum(array_map(function ($item, $ideal) {
                return pow($item - $ideal, 2);
            }, $row, $ideal_positive)));

            $dist_negative[] = sqrt(array_sum(array_map(function ($item, $ideal) {
                return pow($item - $ideal, 2);
            }, $row, $ideal_negative)));
        }

        // Menghitung Skor Preferensi (V)
        $scores = [];
        foreach ($dist_positive as $index => $value) {
            $scores[] = $dist_negative[$index] / ($value + $dist_negative[$index]);
        }

        $results = [];
        foreach ($alternatifs as $index => $alternatif) {
            $results[] = [
                'kode' => $alternatif->kode,
                'nama' => $alternatif->nama,
                'skor' => $scores[$index]
            ];
        }

        usort($results, function ($a, $b) {
            return $b['skor'] <=> $a['skor'];
        });

        return $results;
    }
}
