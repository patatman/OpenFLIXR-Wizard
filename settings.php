<?php

# Network settings
$dhcp = $_POST['dhcp'];
$static = $_POST['static'];
$ip = $_POST['ip'];
$subnet = $_POST['subnet'];
$gateway = $_POST['gateway'];

#Acces settings
$local = $_POST['local'];
$remote = $_POST['remote'];
#if this is true, show the domainname
$domainname = $_POST['domainname'];

#Usenet settings
$usenetdescription = $_POST['usenetdescription'];
$usenetservername = $_POST['usenetservername'];
$usenetusername = $_POST['usenetusername'];
$usenetpassword = $_POST['usenetpassword'];
#usenet ssl
#usenet ssl version

#Newznab
$newznabprovider = $_POST['newznabprovider'];
$newznaburl = $_POST['newznaburl'];
$newznabapi = $_POST['newznabapi'];

#extra settings
$headphones = $_POST['headphones'];
$anidb = $_POST['anidb'];
$imdb = $_POST['imdb'];
$plex = $_POST['plex'];

#Login details, actually only the password but who cares, i call it login details.
$password = $_POST['password'];


#things to write the actual config to the system
$file = fopen("config.ini","w");
fwrite($file,"[network]
dhcp = $dhcp
static = $static
ip = $ip
subnet = $subnet
gateway = $gateway

[access]
local = $local
remote = $remote
domain_name = $domainname

[usenet]
usenet_description = $usenetdescription
usenet_servername = $usenet_servername
usenet_username = $usenet_username
usenet_password = $usenet_password

[newznab]
newznab_provider = $newznabprovider
newznab_url = $newznaburl
newznab_api = $newznabapi

[password]
password = $password

[misc]
headphones = $headphones
anidb = $anidb
imdb = $imdb
plex = $plex
");
fclose($file);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OpenFLIXR setup finish</title>

	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/gsdk-base.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('img/bg.jpg')">

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

     <div class="tab-content">

     	 <div class="wizard-container">
                <div class="card wizard-card ct-wizard-azzure" id="wizard">
                <!--        You can switch "ct-wizard-azzure"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"       -->

                            <div class="tab-pane" id="setup" name="messagebox">
                                <h4 class="info-text">Verify settings</h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
                                        	<h6>Network</h6>
                                      <h8>DHCP</h8><p><?php echo "$dhcp"; ?></p>
                                      <h8>Static</h8><p><?php echo "$static"; ?></p>
                                			<h8>IP adress</h8><p><?php echo "$ip"; ?></p>
                                			<h8>Subnet</h8><p><?php echo "$subnet"; ?></p>
                                			<h8>Gateway</h8><p><?php echo "$gateway"; ?></p>
                                        </div>

                                        <div class="col-sm-5 col-sm-offset-1">
											                      <h6>Let's Encypt</h6>
                                            <h8>Local</h8><p><?php echo "$local"; ?></p>
                                            <h8>Remote</h8><p><?php echo "$remote"; ?></p>
                                            <h8>Domain name</h8><p><?php echo "$domainname"; ?></p>
                                        </div>
                                      </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <h6>Usenet</h6>
                                            <h8>Description</h8><p><?php echo "$usenetdescription"; ?></p>
                                            <h8>Servername</h8><p><?php echo "$usenetservername"; ?></p>
                                            <h8>Username</h8><p><?php echo "$usenetusername"; ?></p>
                                            <h8>Password</h8><p><?php echo "$usenetpassword"; ?></p>


                                        <h8>WORK IN PROGRESS</h8>
                                      </div>
                                      <div class="col-sm-5 col-sm-offset-1">
                                        <h6>Newznab</h6>
                                        <h8>Provider</h8><p><?php echo "$newznabprovider"; ?></p>
                                        <h8>URL</h8><p><?php echo "$newznaburl"; ?></p>
                                        <h8>API</h8><p><?php echo "$newznabapi"; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
											                      <h6>Global password</h6>
                                			<h8>Password</h8><p><?php echo "$password"; ?></p>
                                        </div>
                                      </div>
                                      <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-5 col-sm-offset-1">
                                        <h6>Miscellaneous</h6>
                                        <h8>Headphones</h8><p><?php echo "$headphones"; ?></p>
                                        <h8>AniDB</h8><p><?php echo "$anidb"; ?></p>
                                        <h8>Plex</h8><p><?php echo "$plex"; ?></p>
                                        <h8>Comic Vine</h8><p><?php echo "$imdb"; ?></p>
                                    </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                                <div class="pull-right">
                                     <button type="button" class="btn btn-default">Go!</button>
                                    <?php
                                #    $stringData = "Network Settings:\n";
                                #    fwrite($fh, $stringData);
                                #    $stringData = "hostname: $hostname"
                                #    fwrite($fh, $stringData);
                                #9 DFO:    fclose($fh);
                                ?>
                                </div>
                                <div class="pull-left">
                                     <button type="button" class="btn btn-default">Go back</button>
                                </div>
                                <div class="clearfix"></div>


                        </div>
                        </html>
                    </body>
