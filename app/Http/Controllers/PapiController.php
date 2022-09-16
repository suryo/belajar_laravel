<?php

namespace App\Http\Controllers;

use App\Models\papi_model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PapiResource;
use Illuminate\Support\Facades\Validator;
use DB;


class PapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [];
        echo "papi";
        $data =  DB::table('papi_models')
            ->get();
        // dd($data);
        for ($d = 0; $d < count($data); $d++) {
            $p = $data[$d];
            //dump($p);
            // dump(gettype($p));
            $p->gresult = 0;
            $p->lresult = 0;
            $p->iresult = 0;
            $p->tresult = 0;
            $p->vresult = 0;
            $p->sresult = 0;
            $p->rresult = 0;
            $p->dresult = 0;
            $p->cresult = 0;
            $p->eresult = 0;
            $p->wresult = 0;
            $p->fresult = 0;
            $p->kresult = 0;
            $p->zresult = 0;
            $p->oresult = 0;
            $p->bresult = 0;
            $p->xresult = 0;
            $p->presult = 0;
            $p->aresult = 0;
            $p->nresult = 0;

            $p->ganalisis = '';
            $p->lanalisis = '';
            $p->ianalisis = '';
            $p->tanalisis = '';
            $p->vanalisis = '';
            $p->sanalisis = '';
            $p->ranalisis = '';
            $p->danalisis = '';
            $p->canalisis = '';
            $p->eanalisis = '';
            $p->wanalisis = '';
            $p->fanalisis = '';
            $p->kanalisis = '';
            $p->zanalisis = '';
            $p->oanalisis = '';
            $p->banalisis = '';
            $p->xanalisis = '';
            $p->panalisis = '';
            $p->aanalisis = '';
            $p->nanalisis = '';

            if ($p->jwb1 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb11 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb21 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb31 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb41 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb51 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb61 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb71 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }
            if ($p->jwb81 == 0) {
                $p->gresult = $p->gresult + 1;
            } else {
                $p->gresult = $p->gresult + 0;
            }

            if ($p->jwb12 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb22 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb32 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb42 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb52 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb62 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb72 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb82 == 0) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }
            if ($p->jwb81 == 1) {
                $p->lresult = $p->lresult + 1;
            } else {
                $p->lresult = $p->lresult + 0;
            }

            if ($p->jwb23 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb33 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb43 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb53 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb63 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb73 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb83 == 0) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb82 == 1) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }
            if ($p->jwb71 == 1) {
                $p->iresult = $p->iresult + 1;
            } else {
                $p->iresult = $p->iresult + 0;
            }

            if ($p->jwb34 == 0) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb44 == 0) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb54 == 0) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb64 == 0) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb74 == 0) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb84 == 0) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb83 == 1) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb72 == 1) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }
            if ($p->jwb61 == 1) {
                $p->tresult = $p->tresult + 1;
            } else {
                $p->tresult = $p->tresult + 0;
            }

            if ($p->jwb45 == 0) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb55 == 0) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb65 == 0) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb75 == 0) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb85 == 0) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb84 == 1) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb73 == 1) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb62 == 1) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }
            if ($p->jwb51 == 1) {
                $p->vresult = $p->vresult + 1;
            } else {
                $p->vresult = $p->vresult + 0;
            }


            if ($p->jwb56 == 0) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb66 == 0) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb76 == 0) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb86 == 0) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb85 == 1) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb74 == 1) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb63 == 1) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb52 == 1) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }
            if ($p->jwb41 == 1) {
                $p->sresult = $p->sresult + 1;
            } else {
                $p->sresult = $p->sresult + 0;
            }


            if ($p->jwb67 == 0) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb77 == 0) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb87 == 0) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb86 == 1) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb75 == 1) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb64 == 1) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb53 == 1) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb42 == 1) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }
            if ($p->jwb31 == 1) {
                $p->rresult = $p->rresult + 1;
            } else {
                $p->rresult = $p->rresult + 0;
            }

            if ($p->jwb78 == 0) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb88 == 0) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb87 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb76 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb65 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb54 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb43 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb32 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }
            if ($p->jwb21 == 1) {
                $p->dresult = $p->dresult + 1;
            } else {
                $p->dresult = $p->dresult + 0;
            }

            if ($p->jwb89 == 0) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb88 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb77 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb66 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb55 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb44 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb33 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb22 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }
            if ($p->jwb11 == 1) {
                $p->cresult = $p->cresult + 1;
            } else {
                $p->cresult = $p->cresult + 0;
            }

            if ($p->jwb1 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb12 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb23 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb34 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb45 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb56 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb67 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb78 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }
            if ($p->jwb89 == 1) {
                $p->eresult = $p->eresult + 1;
            } else {
                $p->eresult = $p->eresult + 0;
            }

            // =======================================================================================

            if ($p->jwb90 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb80 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb70 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb60 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb50 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb40 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb30 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb20 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }
            if ($p->jwb10 == 0) {
                $p->wresult = $p->wresult + 1;
            } else {
                $p->wresult = $p->wresult + 0;
            }

            if ($p->jwb79 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb69 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb59 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb49 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb39 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb29 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb19 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb9 == 0) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }
            if ($p->jwb10 == 1) {
                $p->fresult = $p->fresult + 1;
            } else {
                $p->fresult = $p->fresult + 0;
            }

            if ($p->jwb68 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb58 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb48 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb38 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb28 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb18 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb8 == 0) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb9 == 1) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }
            if ($p->jwb20 == 1) {
                $p->kresult = $p->kresult + 1;
            } else {
                $p->kresult = $p->kresult + 0;
            }

            if ($p->jwb57 == 0) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb47 == 0) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb37 == 0) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb27 == 0) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb17 == 0) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb7 == 0) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb8 == 1) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb19 == 1) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }
            if ($p->jwb30 == 1) {
                $p->zresult = $p->zresult + 1;
            } else {
                $p->zresult = $p->zresult + 0;
            }

            if ($p->jwb46 == 0) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb36 == 0) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb26 == 0) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb16 == 0) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb6 == 0) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb7 == 1) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb18 == 1) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb29 == 1) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }
            if ($p->jwb40 == 1) {
                $p->oresult = $p->oresult + 1;
            } else {
                $p->oresult = $p->oresult + 0;
            }

            if ($p->jwb35 == 0) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb25 == 0) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb15 == 0) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb5 == 0) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb6 == 1) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb17 == 1) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb28 == 1) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb39 == 1) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }
            if ($p->jwb50 == 1) {
                $p->bresult = $p->bresult + 1;
            } else {
                $p->bresult = $p->bresult + 0;
            }

            if ($p->jwb24 == 0) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb14 == 0) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb4 == 0) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb5 == 1) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb16 == 1) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb27 == 1) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb38 == 1) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb49 == 1) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }
            if ($p->jwb60 == 1) {
                $p->xresult = $p->xresult + 1;
            } else {
                $p->xresult = $p->xresult + 0;
            }

            if ($p->jwb13 == 0) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb3 == 0) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb4 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb15 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb25 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb37 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb48 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb59 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }
            if ($p->jwb70 == 1) {
                $p->presult = $p->presult + 1;
            } else {
                $p->presult = $p->presult + 0;
            }

            if ($p->jwb2 == 0) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb3 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb14 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb25 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb36 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb47 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb58 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb69 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }
            if ($p->jwb80 == 1) {
                $p->aresult = $p->aresult + 1;
            } else {
                $p->aresult = $p->aresult + 0;
            }

            if ($p->jwb2 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb13 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb24 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb35 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb46 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb57 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb68 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb79 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            if ($p->jwb90 == 1) {
                $p->nresult = $p->nresult + 1;
            } else {
                $p->nresult = $p->nresult + 0;
            }
            // ================================================================== G ==========================
            if (($p->gresult >= 0) && ($p->gresult <= 4)) {
                $p->ganalisis = 'Bekerja untuk kesenangan saja, bukan hasil optimal';
            } else
             if (($p->gresult >= 5) && ($p->gresult <= 9)) {
                $p->ganalisis = 'Kemauan bekerja keras tinggi';
            }
            // ================================================================== L ==========================
            if (($p->lresult >= 0) && ($p->lresult <= 4)) {
                $p->lanalisis = 'Cenderung tidak aktif menggunakan orang lain dalam bekerja. ';
            } else
             if (($p->lresult >= 5) && ($p->lresult <= 9)) {
                $p->lanalisis = 'Memproyeksikan diri sebagai pemimpin.';
            }
            // ================================================================== i ==========================
            if (($p->iresult >= 0) && ($p->iresult <= 4)) {
                $p->ianalisis = 'Berhati-hati dalam mengambil keputusan.';
            } else
             if (($p->iresult >= 5) && ($p->iresult <= 7)) {
                $p->ianalisis = 'Berhati-hati dan lancar dalam mengambil keputusan.';
            } else
             if (($p->iresult >= 8) && ($p->iresult <= 9)) {
                $p->ianalisis = 'Tidak ragu dalam mengambil keputusan';
            }
            // ================================================================== t ==========================
            if (($p->tresult >= 0) && ($p->tresult <= 3)) {
                $p->tanalisis = 'Melakukan sesuatu menurut kemauannya sendiri';
            } else
if (($p->tresult >= 4) && ($p->tresult <= 9)) {
                $p->tanalisis = 'Aktif secara internal dan mental';
            }
            // ================================================================== v ==========================
            if (($p->vresult >= 0) && ($p->vresult <= 4)) {
                $p->vanalisis = 'Cenderung pasif';
            } else
if (($p->vresult >= 5) && ($p->vresult <= 9)) {
                $p->vanalisis = 'Aktif secara fisik, cenderung sportif';
            }

            // ================================================================== S ==========================
            if (($p->sresult >= 0) && ($p->sresult <= 5)) {
                $p->sanalisis = 'Perhatian rendah terhadap hubungan sosial';
            } else
            if (($p->sresult >= 6) && ($p->sresult <= 9)) {
                $p->sanalisis = 'Kepercayaan tinggi dalam hubungan sosial, suka interaksi sosial';
            }
            // ================================================================== R ==========================
            if (($p->rresult >= 0) && ($p->rresult <= 4)) {
                $p->ranalisis = 'Kurang perhatian, bersifat praktis';
            } else
            if (($p->rresult >= 5) && ($p->rresult <= 9)) {
                $p->ranalisis = 'Nilai penalaran tergolong tinggi';
            }

            // ================================================================== D ==========================
            if (($p->dresult >= 0) && ($p->dresult <= 3)) {
                $p->danalisis = 'Tidak berminat bekerja detail';
            } else
              if (($p->dresult >= 4) && ($p->dresult <= 9)) {
                $p->danalisis = 'Minat tinggi unbtuk bekerja detail';
            }
            // ================================================================== C ==========================
            if (($p->cresult >= 0) && ($p->cresult <= 5)) {
                $p->canalisis = 'Teratur tetapi tidak tergolong flexibel';
            } else
            if (($p->cresult >= 6) && ($p->cresult <= 9)) {
                $p->canalisis = 'Keteraturan tinggi, cenderung kaku';
            }
            // ================================================================== E ==========================
            if (($p->eresult >= 0) && ($p->eresult <= 3)) {
                $p->eanalisis = 'Terbuka';
            } else
             if (($p->eresult >= 4) && ($p->eresult <= 6)) {
                $p->eanalisis = 'Punya pendekatan emosional yang seimbang';
            } else
             if (($p->eresult >= 7) && ($p->eresult <= 9)) {
                $p->eanalisis = 'Sangat normative, kebutuhan pengendalian diri yang berlebihan';
            }
            // ================================================================== W ==========================
            if (($p->wresult >= 0) && ($p->wresult <= 3)) {
                $p->wanalisis = 'Berorientasi pada tujuan, mandiri';
            } else
             if (($p->wresult >= 4) && ($p->wresult <= 5)) {
                $p->wanalisis = 'Kebutuhan akan pengarahan dan harapan yang dirumuskan untuknya';
            } else
             if (($p->wresult >= 6) && ($p->wresult <= 9)) {
                $p->wanalisis = 'Meningkatnya orientasi terhadap tugas dan membutuhkan instruksi yang jelas';
            }
            // ================================================================== F ==========================
            if (($p->fresult >= 0) && ($p->fresult <= 3)) {
                $p->fanalisis = 'Mengurus kepentingannya sendiri';
            } else
             if (($p->fresult >= 4) && ($p->fresult <= 5)) {
                $p->fanalisis = 'Setia terhadap perusahaan';
            } else
             if (($p->fresult >= 6) && ($p->fresult <= 9)) {
                $p->fanalisis = 'Bersikap setia dan membantu';
            }
            // ================================================================== K ========================== 
            if (($p->kresult >= 0) && ($p->kresult <= 2)) {
                $p->kanalisis = 'Menghindari masalah';
            } else
             if (($p->kresult >= 3) && ($p->kresult <= 4)) {
                $p->kanalisis = 'Suka lingkungan tenang, menghindari konflik';
            } else
             if (($p->kresult == 5)) {
                $p->kanalisis = 'Keras kepala';
            } else
             if (($p->kresult >= 6) && ($p->kresult <= 9)) {
                $p->kanalisis = 'Agresif, cenderung defensive';
            }
            // ================================================================== Z ==========================
            if (($p->zresult >= 0) && ($p->zresult <= 4)) {
                $p->zanalisis = 'Tidak suka perubahan jika dipaksakan';
            } else
             if (($p->zresult >= 5) && ($p->zresult <= 9)) {
                $p->zanalisis = 'Mudah menyesuaikan diri';
            }
            // ================================================================== O ==========================
            if (($p->oresult >= 0) && ($p->oresult <= 4)) {
                $p->oanalisis = 'Sadar akan hubungan perorangan, tapi tidak terlalu tergantung';
            } else
             if (($p->oresult >= 5) && ($p->oresult <= 9)) {
                $p->oanalisis = 'Sangat tergantung, butuh penerimaan diri';
            }
            // ================================================================== B ==========================
            if (($p->bresult >= 0) && ($p->bresult <= 3)) {
                $p->banalisis = 'Selektif';
            } else
             if (($p->bresult >= 4) && ($p->bresult <= 5)) {
                $p->banalisis = 'Butuh diterima, tapi tidak mudah dipengaruhi kelompok';
            } else
             if (($p->bresult >= 6) && ($p->bresult <= 9)) {
                $p->banalisis = 'Butuh disukai dan diakui, mudah dipengaruhi';
            }
            // ================================================================== X ==========================
            if (($p->xresult >= 0) && ($p->xresult <= 3)) {
                $p->xanalisis = 'Rendah kati, tulus';
            } else
             if (($p->xresult >= 4) && ($p->xresult <= 5)) {
                $p->xanalisis = 'Memiliki pola prilaku unik';
            } else
             if (($p->xresult >= 6) && ($p->xresult <= 9)) {
                $p->xanalisis = 'Membutuhkan perhatian nyata';
            }
            // ================================================================== P ==========================
            if (($p->presult >= 0) && ($p->presult <= 4)) {
                $p->panalisis = 'Menurunnya keinginan untuk bertanggung jawab pada pekerjaan orang lain';
            } else
            if (($p->presult >= 5) && ($p->presult <= 9)) {
                $p->panalisis = 'Kebutuhan untuk menerima tanggung jawab dari pekerjaan orang lain.';
            }
            // ================================================================== A ==========================
            if (($p->aresult >= 0) && ($p->aresult <= 5)) {
                $p->aanalisis = 'Tidak ada usaha lebih';
            } else
             if (($p->aresult >= 6) && ($p->aresult <= 9)) {
                $p->aanalisis = 'Tujuan jelas, kebutuhan sukses dan ambisi tinggi';
            }
            // ================================================================== N ==========================
            if (($p->nresult >= 0) && ($p->nresult <= 4)) {
                $p->nanalisis = 'Menunda/menghindari pekerjaan';
            } else
            if (($p->nresult >= 5) && ($p->nresult <= 6)) {
                $p->nanalisis = 'Cukup bertanggung jawab pada pekerjaan';
            } else
            if (($p->nresult >= 7) && ($p->nresult <= 9)) {
                $p->nanalisis = 'Memiliki tanggung jawab tinggi.';
            }

            array_push($result, $p);
            //dd($result);
        }




        //use -> untuk memumculkan field (fielsd bersifat object)
        //dump($result[0]->no_pendaftaran);

        return view('papi', ['data' => $result]);
        // return response()->json(['status' => 'success', 'data' => $result, 'code' => 200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
