<?php
$is_admin=false;
$current_user_roles='H2';
$current_user_parent_role_seq='H1::H2';
$current_user_profiles=[1,];
$profileGlobalPermission=['1'=>1,'2'=>1,];
$profileTabsPermission=['1'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'33'=>0,'34'=>0,'35'=>0,'37'=>0,'40'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'48'=>0,'50'=>0,'51'=>0,'54'=>0,'57'=>0,'58'=>0,'59'=>0,'60'=>0,'61'=>0,'72'=>0,'73'=>0,'74'=>0,'75'=>0,'78'=>0,'79'=>0,'80'=>0,'81'=>0,'82'=>0,'83'=>0,'84'=>0,'85'=>0,'86'=>0,'87'=>0,'88'=>0,'89'=>0,'90'=>0,'91'=>0,'92'=>0,'93'=>0,'94'=>0,'95'=>0,'96'=>0,'97'=>0,'98'=>0,'99'=>0,'100'=>0,'101'=>0,'102'=>0,'103'=>0,'104'=>0,'105'=>0,'106'=>0,'107'=>0,'108'=>0,'109'=>0,'110'=>0,'111'=>0,'112'=>0,'113'=>0,'114'=>0,'115'=>0,'116'=>0,'117'=>0,'118'=>0,'119'=>0,'120'=>0,'3'=>0,];
$profileActionPermission=[4=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],6=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],7=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,9=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],8=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],9=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,31=>0,32=>0,33=>0,34=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],13=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],14=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],15=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],16=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,15=>0,],18=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],19=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],25=>[0=>1,1=>1,2=>1,4=>1,7=>1,6=>0,13=>0,],26=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],33=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,11=>0,12=>0,14=>0,],34=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],35=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],37=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],40=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,16=>0,41=>0,42=>0,],41=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],42=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],43=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],45=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,14=>0,],51=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>1,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],54=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>1,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,26=>0,27=>0,34=>0,35=>0,41=>0,42=>0,46=>0,48=>0,49=>0,50=>0,],57=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],58=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],59=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>1,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],60=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],61=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],74=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,26=>0,27=>0,34=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],75=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],78=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],79=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],80=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>1,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],81=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],82=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],83=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],84=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],85=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],86=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],87=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],88=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],89=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],90=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],91=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],92=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,20=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],93=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,17=>0,18=>0,19=>0,20=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],94=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,41=>0,42=>0,46=>0,48=>0,49=>1,51=>1,],95=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,41=>0,42=>0,46=>0,48=>0,49=>1,51=>1,],96=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],97=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],98=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],99=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],100=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],101=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],102=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],103=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],104=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],105=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],106=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],107=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],108=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],109=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,14=>0,34=>0,36=>0,37=>0,38=>0,41=>0,42=>0,46=>0,48=>0,49=>1,],111=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,44=>0,46=>0,47=>0,48=>0,],112=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,22=>0,26=>0,27=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],113=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,22=>0,26=>0,27=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],114=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,22=>0,26=>0,27=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],115=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,22=>0,26=>0,27=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],116=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,22=>0,26=>0,27=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,],117=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,14=>0,15=>0,17=>0,18=>0,19=>0,20=>0,22=>0,26=>0,27=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,49=>0,51=>1,],118=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,],119=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,],120=>[0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,14=>0,15=>0,17=>0,18=>0,19=>0,22=>0,24=>0,25=>0,26=>0,27=>0,28=>0,30=>0,34=>0,36=>0,37=>0,40=>0,41=>0,42=>0,46=>0,48=>0,],];
$current_user_groups=[];
$subordinate_roles=['H10','H40','H41','H50','H52','H42','H43','H47','H48','H49','H26','H3','H38','H39','H44','H45','H51','H6',];
$parent_roles=['H1',];
$subordinate_roles_users=['H10'=>[5,],'H40'=>[],'H41'=>[],'H50'=>[],'H52'=>[33,],'H42'=>[],'H43'=>[19,26,],'H47'=>[13,],'H48'=>[14,15,16,17,18,],'H49'=>[10,11,12,29,],'H26'=>[],'H3'=>[],'H38'=>[],'H39'=>[],'H44'=>[],'H45'=>[],'H51'=>[21,22,32,],'H6'=>[6,8,23,],];
$user_info=['roleid'=>'H2','user_name'=>'test','is_admin'=>'off','user_password'=>'$1$te000000$s0l6v/z9ElDe2kKbw52u6/','confirm_password'=>'$1$te000000$s0l6v/z9ElDe2kKbw52u6/','first_name'=>'Test','last_name'=>'Account','email1'=>'c.capooth@gmail.com','status'=>'Active','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'24','start_hour'=>'08:00','date_format'=>'mm-dd-yyyy','description'=>'','accesskey'=>'bsVj2Juy4ttpTkCX','time_zone'=>'America/Denver','currency_id'=>1,'currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'$1.0','imagename'=>'','internal_mailer'=>1,'theme'=>'twilight','language'=>'en_us','reminder_interval'=>'15 Minutes','phone_crm_extension'=>'','no_of_currency_decimals'=>2,'truncate_trailing_zeros'=>1,'dayoftheweek'=>'Monday','callduration'=>5,'othereventduration'=>5,'calendarsharedtype'=>'Public','default_record_view'=>'Summary','leftpanelhide'=>0,'rowheight'=>'medium','defaulteventstatus'=>'PLL_PLANNED','defaultactivitytype'=>'Meeting','is_owner'=>'0','end_hour'=>'17:00','emailoptout'=>1,'available'=>1,'auto_assign'=>0,'records_limit'=>0,'currency_name'=>'USA, Dollars','currency_code'=>'USD','currency_symbol'=>'&#36;','conv_rate'=>'1.00000','id'=>7];
return ['details'=>['roleid'=>'H2','user_name'=>'test','is_admin'=>false,'user_password'=>'$1$te000000$s0l6v/z9ElDe2kKbw52u6/','confirm_password'=>'$1$te000000$s0l6v/z9ElDe2kKbw52u6/','first_name'=>'Test','last_name'=>'Account','email1'=>'c.capooth@gmail.com','status'=>'Active','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'24','start_hour'=>'08:00','reports_to_id'=>'','date_format'=>'mm-dd-yyyy','description'=>'','accesskey'=>'bsVj2Juy4ttpTkCX','time_zone'=>'America/Denver','currency_id'=>1,'currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'$1.0','imagename'=>'','internal_mailer'=>1,'theme'=>'twilight','language'=>'en_us','reminder_interval'=>'15 Minutes','phone_crm_extension'=>'','no_of_currency_decimals'=>2,'truncate_trailing_zeros'=>1,'dayoftheweek'=>'Monday','callduration'=>5,'othereventduration'=>5,'calendarsharedtype'=>'Public','default_record_view'=>'Summary','leftpanelhide'=>0,'rowheight'=>'medium','defaulteventstatus'=>'PLL_PLANNED','defaultactivitytype'=>'Meeting','is_owner'=>'0','end_hour'=>'17:00','emailoptout'=>1,'available'=>1,'auto_assign'=>0,'records_limit'=>0,'currency_name'=>'USA, Dollars','currency_code'=>'USD','currency_symbol'=>'&#36;','conv_rate'=>'1.00000','record_id'=>7,'record_module'=>'Users'],'displayName'=>'Test Account','profiles'=>[0=>1],'groups'=>[],'parent_roles'=>[0=>'H1'],'parent_role_seq'=>'H1::H2'];