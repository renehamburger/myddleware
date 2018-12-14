<?php

namespace Myddleware\RegleBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myddleware\RegleBundle\Entity\JobScheduler;
use Myddleware\RegleBundle\Form\JobSchedulerType;
// Include JSON Response
use Symfony\Component\HttpFoundation\JsonResponse;


class TestApiController extends Controller
{


    public function testAction()
    {
        $params=['name'=>'John', 'surname'=>'Doe', 'age'=>36];
        $defaults = array(
            CURLOPT_URL => 'http://192.168.33.10/myddleware/web/app_dev.php/api/hello-world',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => ['Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE1NDQ3OTAwMzcsImV4cCI6MTU0NDc5MzYzNywicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluIn0.OTxYlIIGfPYnZAumyxZaZ-aSrwqEnQmWkN26cFwhEjHQYBHqYlCyGjPthPzuhTq9FR7cwo17mHpS9TLjuvawJ-STjgZZRelOsmHv1SPIhnKS3c7pEZ53au59HJ9tqR2NMcCbjK5X_OlhiXxVgMn8z0LEJ8WXRLeIwRp9uGjLyUqNS5nAGR7L_r6zgwmA8E5a5FvFNEHSSLuQQi8LaZHKQZSo8-lsWffquTJtUHnPnEL0tO17_nVA00IRhkI1F5vQG87EkhNZS_JXZvXhg14dyrUzIgYFBdDGL3nojQ5_-CnRL35nDloUUXdCLf0yVkf2ia6ajMi4kgBbc9p6IxbTx8Re2s5KrUctct3EbswzhN4sZ5Syh-YE2p822l2Sa4pzZVglHorGP90-RIQkwakr2oQcf-swK_0yMdt_jgJ6UIP7PPW5e-USrLAaCiAMz4q9noOv0FFGDu9VKSHRC0lfyOMvXP6qrxRmMkJcgiyHk2nOngNOKyatBMGjx2QpxLSiMIprlLIbMUnS2vCZiUnU86HqQ0D58B2kOicpZiVbGlOaawpehcmeJt3qE03f13NwlrjtEjg1rn13zIFmIDzOeIor_w_p-modu48sz-hFbyHT2evKVJY_KsJjhZ9MaTwIVzxjhxn7Ga-010thuljMNvDKxhNZV1PGGZ7FJVtjaPk']

        );
        $options = [];
        $ch = curl_init();
        curl_setopt_array($ch, ($options + $defaults));
        $response = curl_exec($ch);
        curl_close($ch);
       return new JsonResponse(json_decode($response));
    }



}
