<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    const NB_AVIS_PAR_PAGE=5;
    public function Accueil(Request $request):View{
        $keyword = $request->get('orderby');
        $keyword_note=1;
        $order="ASC";
        echo $keyword;
        $tab_entier=["1","2","3","4","5"];
        $msg='';
        if (!empty($keyword)) {
            // $keyword_int=intval($k)
            switch ($keyword) {
                case in_array($keyword, $tab_entier):
                    $msg="Avis avec $keyword étoile(s)";
                    $avis = Avis::where('note', intval($keyword))
                        ->latest()->paginate(self::NB_AVIS_PAR_PAGE);

                    break;
                case "date_asc":
                    $msg="Avis par étoile croissant";
                    $avis = Avis::latest()->paginate(self::NB_AVIS_PAR_PAGE);
                    break;
                case "date_desc":
                    $msg="Avis par étoile décroissant";
                    $avis = Avis::oldest()->paginate(self::NB_AVIS_PAR_PAGE);
                    break;
                case "star_asc":
                    $msg="Avis par étoile croissant";
                    $avis = Avis::orderBy('note', 'ASC')->paginate(self::NB_AVIS_PAR_PAGE);
                    break;
                case "star_desc":
                    $msg="Avis par étoile décroissant";
                    $avis = Avis::orderBy('note', 'DESC')->paginate(self::NB_AVIS_PAR_PAGE);
                    break;
                default:
                   $msg="Avis par date croissant";
                    $avis = Avis::latest()->simplepaginate(self::NB_AVIS_PAR_PAGE);

            }
        }else{
            $msg="Avis par date croissant";
            $avis = Avis::latest()->simplepaginate(self::NB_AVIS_PAR_PAGE);
        }


       $moyenne=round($this->getAvgNotes(),0);
        $nb_avis=$this->getNbAvis();
        //diviseur!=0
        $nb_avis_div=$nb_avis>0?$nb_avis:1;
        //Pourcentages
        $p_nb_avis5=round(($this->getNbAvis(5)/$nb_avis_div)*100);
        $p_nb_avis4=round(($this->getNbAvis(4)/$nb_avis_div)*100);
        $p_nb_avis3=round(($this->getNbAvis(3)/$nb_avis_div)*100);
        $p_nb_avis2=round(($this->getNbAvis(2)/$nb_avis_div)*100);
        $p_nb_avis1=round(($this->getNbAvis(1)/$nb_avis_div)*100);
        //dd($p_nb_avis5);
        return view('frontend.index',compact('avis','keyword','msg','p_nb_avis5','p_nb_avis4','p_nb_avis3','p_nb_avis2','p_nb_avis1','nb_avis','moyenne'))->with('success','Item created successfully!');;
    }
    public function getAvgNotes(){
        $avis_sum=Avis::selectRaw('avg(note) as avg_all')->first();
        return $avis_sum->avg_all;
    }
    public function getNbAvis(int $nb=0){
        if($nb==0){
            return Avis::select('id')->count();
        }
        if($nb>0 && $nb<=5){
            return Avis::where('note',$nb)->count();
        }

    }

}
