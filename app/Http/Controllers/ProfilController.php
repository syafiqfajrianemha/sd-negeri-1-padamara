<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\ProgramPaguyubanKomite;
use App\Models\ProgramUnggulan;
use App\Models\Sejarah;
use App\Models\Struktural;
use App\Models\StrukturalKomite;
use App\Models\StrukturOrganisasi;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function visimisi()
    {
        $visimisi = VisiMisi::latest()->get();
        return view('user.tentang-kami.visi-dan-misi.index', compact('visimisi'));
    }

    public function strukturorganisasi()
    {
        $struktur = StrukturOrganisasi::latest()->get();
        return view('user.tentang-kami.struktur.index', compact('struktur'));
    }

    public function sejarah()
    {
        $sejarah = Sejarah::latest()->get();
        return view('user.tentang-kami.sejarah.index', compact('sejarah'));
    }
}
