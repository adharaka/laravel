<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    private $siswa = [
        [
            'nis' => '101',
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Merdeka No. 1',
            'tanggal_lahir' => '2006-05-14',
            'foto' => 'https://randomuser.me/api/portraits/men/1.jpg'
        ],
        [
            'nis' => '102',
            'nama' => 'Siti Aminah',
            'alamat' => 'Jl. Sudirman No. 5',
            'tanggal_lahir' => '2005-09-23',
            'foto' => 'https://randomuser.me/api/portraits/women/2.jpg'
        ],
        [
            'nis' => '103',
            'nama' => 'Andi Wijaya',
            'alamat' => 'Jl. Diponegoro No. 10',
            'tanggal_lahir' => '2007-01-08',
            'foto' => 'https://randomuser.me/api/portraits/men/3.jpg'
        ],
        [
            'nis' => '104',
            'nama' => 'Dewi Lestari',
            'alamat' => 'Jl. Gatot Subroto No. 12',
            'tanggal_lahir' => '2006-11-30',
            'foto' => 'https://randomuser.me/api/portraits/women/4.jpg'
        ],
        [
            'nis' => '105',
            'nama' => 'Rudi Hartono',
            'alamat' => 'Jl. Ahmad Yani No. 7',
            'tanggal_lahir' => '2005-07-19',
            'foto' => 'https://randomuser.me/api/portraits/men/5.jpg'
        ],
    ];

    public function index()
    {
        return view('siswa.index', ['siswa' => $this->siswa]);
    }

    public function show($nis)
    {
        $siswa = collect($this->siswa)->firstWhere('nis', $nis);

        if (!$siswa) {
            abort(404, 'Siswa tidak ditemukan');
        }

        return view('siswa.show', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan (simulasi).');
    }
}
