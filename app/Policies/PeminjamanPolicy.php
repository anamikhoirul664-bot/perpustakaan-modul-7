<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Peminjaman;

class PeminjamanPolicy
{
    /**
     * Menentukan siapa yang boleh melihat peminjaman.
     */
    public function view(User $user, Peminjaman $peminjaman): bool
    {
        // Admin dan petugas boleh melihat semua peminjaman
        if ($user->hasAnyRole(['admin', 'petugas'])) {
            return true;
        }

        // Siswa hanya boleh melihat peminjamannya sendiri
        if ($user->hasRole('siswa')) {
            $anggota = $user->anggota;

            return $anggota !== null
                && (int) $peminjaman->anggota_id === (int) $anggota->id;
        }

        return false;
    }
}
