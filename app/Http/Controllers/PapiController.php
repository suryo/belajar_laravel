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