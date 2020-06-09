<?php
//gosto de usar esse site pra testar: http://www.writephponline.com/

$months=3;

//ganhos
$date['2020-06-01']=700;
$date['2020-05-23']=300;
$date['2020-05-03']=500;
$date['2020-04-18']=250;
$date['2020-04-04']=320;
$date['2020-03-26']=260;
$date['2020-03-10']=500;
$date['2020-03-02']=670;
$date['2020-02-16']=500;
$date['2020-02-09']=540;
$date['2020-01-15']=500;
$date['2020-01-05']=720;

//gastos
$moto=370;
$server=260;
$alexia=$whitehats=40;
$house=500;
$water=30;
$light=150;
$internet=70;
$gasoline=50;
$food=150;

$weekly=$food; //semanal
$monthly=($weekly*4)+$house+$gasoline+$internet+$water+$light; //mensal
$yearly=($monthly*12)+$moto+$server+$alexia+$whitehats; //anual

$sum=0;
$actualMonth;
$monthCount=-1; //não conta o último mês
foreach($date as $f=>$v) {
  $x=explode("-",$f);
  if ($actualMonth!=$x[1]) { //se mês for diferente do último
      $actualMonth=$x[1]; //iguala pra comparar depois
      $monthCount++; //conta +1 mês
  }
  if ($monthCount>=1 or $monthCount<=$months) {
      $sum+=$v; //soma o valor
  }
}
$monthCount=($monthCount>$months)?$months:$monthCount; //contagem da divisão
echo 'Estimativa de dados de acordo com os últimos '.$months.' meses<br>';
echo '---------------------------------------------------<br>';
echo 'Soma dos ganhos: R$ '.number_format($sum,2,',','.').'<br>';   
echo '---------------------------------------------------<br>';
echo 'Estimativa de ganho anual: R$ '.number_format((($sum/$monthCount)*12),2,',','.').'<br>';  
echo 'Estimativa de ganho mensal: R$ '.number_format(($sum/$monthCount),2,',','.').'<br>'; 
echo 'Estimativa de ganho semanal: R$ '.number_format((($sum/$monthCount)/4.2),2,',','.').'<br>';
echo 'Estimativa de ganho diário: R$ '.number_format((($sum/$monthCount)/30),2,',','.').'<br>';
echo 'Estimativa de ganho hora: R$ '.number_format((($sum/$monthCount)/30/24),2,',','.').'<br>';
echo 'Estimativa de ganho 1/8 hora: R$ '.number_format((($sum/$monthCount)/30/8),2,',','.').'<br>';
echo '---------------------------------------------------<br>';
echo 'Estimativa de gasto anual: R$ '.number_format($yearly,2,',','.').'<br>';
echo 'Estimativa de gasto mensal: R$ '.number_format(($yearly/12),2,',','.').'<br>';
echo 'Estimativa de gasto semanal: R$ '.number_format(($yearly/12/4),2,',','.').'<br>';
echo 'Estimativa de gasto diário: R$ '.number_format(($yearly/12/30),2,',','.').'<br>';
echo 'Estimativa de gasto hora: R$ '.number_format(($yearly/12/30/24),2,',','.').'<br>';
echo 'Estimativa de gasto 1/8 hora: R$ '.number_format(($yearly/12/30/8),2,',','.').'<br>';
echo '---------------------------------------------------<br>';
echo 'Estimativa de diferença anual: R$ '.number_format((($sum/$monthCount)*12)-$yearly,2,',','.').'<br>';
echo 'Estimativa de diferença mensal: R$ '.number_format(($sum/$monthCount)-($yearly/12),2,',','.').'<br>';
echo 'Estimativa de diferença semanal: R$ '.number_format((($sum/$monthCount)/4.2)-($yearly/12/4),2,',','.').'<br>';
echo 'Estimativa de diferença diário: R$ '.number_format((($sum/$monthCount)/30)-($yearly/12/30),2,',','.').'<br>';
echo 'Estimativa de diferença hora: R$ '.number_format((($sum/$monthCount)/30/24)-($yearly/12/30/24),2,',','.').'<br>';
echo 'Estimativa de diferença 1/8 hora: R$ '.number_format((($sum/$monthCount)/30/8)-($yearly/12/30/8),2,',','.').'<br>';
