<?php

namespace App\Controller;
use App\Repository\PointderelaisRepository;
use App\Entity\Pointderelais;
use App\Form\PointderelaisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class PointderelaisController extends AbstractController
{#[Route('/pointderelais/back/', name: 'app_pointderelais_index', methods: ['GET'])]
    public function index(PointderelaisRepository $PointderelaisRepository): Response
    {
        return $this->render('pointderelais/index.html.twig', [
            'pointderelaiss' => $PointderelaisRepository->findAll(),
        ]);
    }

    #[Route('/stat/stat', name: 'app_cons_stat', methods: ['GET'])]
    public function yourAction(EntityManagerInterface $entityManager)
    {
        $total = 0;
        $Ariana = 0;
        $Tunis= 0;
        $BenArous = 0;
        $Beja = 0;
        $Bizerte= 0;
        $Gabes = 0;
        $Gafsa = 0;
        $Jendouba= 0;
        $Kairaouan = 0;
        $Kasserine = 0;
        $Kelibi= 0;
        $Kef = 0;
        $Mahdia= 0;
        $Manouba= 0;
        $Mednine = 0;
        $Monastir = 0;
        $Nabeul= 0;
        $Sfax= 0;
        $SidiBouzid = 0;
        $Sliana= 0;
        $Sousse = 0;
        $Tataouine = 0;
        $Tozeur= 0;
        $Zaghouan = 0;

        
        $pointderelaiss = $entityManager->createQuery("SELECT p FROM App\Entity\Pointderelais p")->getResult();
        foreach ($pointderelaiss as $pointderelais) {
            $region = $pointderelais->getRegion();
            switch ($region) {
                case "Ariana":
                    $Ariana++;
                    break;

                case "Tunis":
                    $Tunis++;
                    break;

                case "BenArous":
                    $BenArous++;
                    break;


                    case "Beja":
                        $Beja++;
                        break;


                        case "Bizerte":
                            $Bizerte++;
                            break;


                            case "Gabes":
                                $Gabes++;
                                break;

                                
                                case "Gafsa":
                                    $Gafsa++;
                                    break;

                                    case "Jendouba":
                                        $Jendouba++;
                                        break;

                                        case "Kairaouan":
                                            $Kairaouan++;
                                            break;

                                            case "Kasserine":
                                          $Kasserine++;
                                                break;


                                                case "Kelibi":
                                                    $Kelibi++;
                                                    break;

                                                    case "Kef":
                                                        $Kef++;
                                                        break;

                                                        case "Mahdia":
                                                            $Mahdia++;
                                                            break;


                                                            case "Manouba":
                                                                $Manouba++;
                                                                break;


                                                                case "Mednine":
                                                                    $Mednine++;
                                                                    break;


                                                                    case "Monastir":
                                                                        $Monastir++;
                                                                        break;


                                                                        case "Nabeul":
                                                                            $Nabeul++;
                                                                            break;


                                                                            case "Sfax":
                                                                                $Sfax++;
                                                                                break;



                                                                                
                                                                            case "SidiBouzid":
                                                                                $SidiBouzid++;
                                                                                break;


                                                                                case "Sliana":
                                                                                    $Sliana++;
                                                                                    break;


                                                                                    case "Sousse":
                                                                                        $Sousse++;
                                                                                        break;

  
                                                                                        case "Tataouine":
                                                                                            $Tataouine++;
                                                                                            break;

                                                                                            

                                                                                            case "Tozeur":
                                                                                                $Tozeur++;
                                                                                                break;

                                                                                                


                                                                                                case "Zaghouan":
                                                                                                    $Zaghouan++;
                                                                                                    break;
            
    





            }
            $total++;
        }
        
        $Ariana = ($Ariana * 100) / $total;
        $Tunis = ($Tunis* 100) / $total;
        $BenArous = ($BenArous * 100) / $total;
        $Beja = ($Beja * 100) / $total;
        $Bizerte = ($Bizerte * 100) / $total;
        $Gabes = ($Gabes * 100) / $total;
        $Gafsa = ($Gafsa * 100) / $total;
        $Jendouba = ($Jendouba * 100) / $total;
        $Kairaouan = ($Kairaouan * 100) / $total;
        $Kasserine = ($Kasserine * 100) / $total;
        $Kelibi = ($Kelibi * 100) / $total;
        $Kef = ($Kef * 100) / $total;
        $Mahdia = ($Mahdia * 100) / $total;
        $Manouba = ($Manouba * 100) / $total;
        $Mednine = ($Mednine * 100) / $total;
        $Monastir = ($Monastir * 100) / $total;
        $Nabeul = ($Nabeul * 100) / $total;
        $Sfax = ($Sfax * 100) / $total;
        $SidiBouzid = ($SidiBouzid * 100) / $total;
        $Sliana = ($Sliana * 100) / $total;
        $Sousse = ($Sousse * 100) / $total;
        $Tataouine = ($Tataouine * 100) / $total;
        $Tozeur = ($Tozeur * 100) / $total;
        $Zaghouan = ($Zaghouan * 100) / $total;

        
        $data = array(
            
            'Ariana' => $Ariana ,
            'Tunis'=> $Tunis,
            'BenArous'=> $BenArous ,
            'Beja'=> $Beja,
            'Bizerte'=> $Bizerte,
            'Gabes'=> $Gabes,
            'Gafsa'=> $Gafsa,
            'Jendouba'=> $Jendouba,
            'Kairaouan'=> $Kairaouan,
            'Kasserine'=> $Kasserine,
            'Kelibi'=> $Kelibi,
            'Kef'=> $Kef,
            'Mahdia'=> $Mahdia,
            'Manouba'=> $Manouba,
            'Mednine'=> $Mednine,
            'Monastir'=> $Monastir,
            'Nabeul'=> $Nabeul,
            'Sfax'=> $Sfax,
            'SidiBouzid'=> $SidiBouzid,
            'Sliana'=> $Sliana,
            'Sousse'=> $Sousse,
            'Tataouine'=> $Tataouine,
            'Tozeur'=> $Tozeur,
            'Zaghouan'=> $Zaghouan
        );
        
        return $this->render('pointderelais/stat.html.twig', [
            'data' => $data,
        ]);
    }
    
}