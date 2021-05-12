<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crypterio</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/ui.css">
</head>
<body class="crypt-dark">
	<header>
		<div class="container-full-width">
			<div class="crypt-header">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
						<div class="row">
							<div class="col-xs-2">
								<div class="crypt-logo">
									<img src="images/logo.jpg" alt="">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="crypt-mega-dropdown-menu">
								  	<a href="" class="crypt-mega-dropdown-toggle">BTC/ETH <i class="pe-7s-angle-down-circle"></i></a>
								  	<div class="crypt-mega-dropdown-menu-block">
								  		<div class="crypt-market-status">
											<div>
											  <!-- Tab panes -->
											  <div class="tab-content">
											    <div role="tabpanel" class="tab-pane active">
											    </div>
											  </div>
											</div>
										</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block d-lg-block">
						<ul class="crypt-heading-menu fright">
                            <li><a href="trading.html">Trading</a></li>
                            <li><a href="user-dashboard.html">Account</a></li>
                            <li><a href="withdrawl.html">Sign Out</a></li>
                            <li class="crypt-box-menu menu-red"><a href="user-dashboard.html">Withdraw</a></li>
                            <li class="crypt-box-menu menu-green"><a href="user-dashboard.html">Deposit</a></li>
                        </ul>
					</div>
					<i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i>
				</div>
			</div>
		</div>
		<div class="crypt-mobile-menu">
			<ul class="crypt-heading-menu fright">
                <li><a href="trading.html">Trading</a></li>
               <li><a href="user-dashboard.html">Account</a></li>
                    <li><a href="withdrawl.html">Sign Out</a></li>
                        <li class="crypt-box-menu menu-red"><a href="user-dashboard.html">Withdraw</a></li>
                      <li class="crypt-box-menu menu-green"><a href="user-dashboard.html">Deposit</a></li>
             </ul>
		</div>
	</header>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row sm-gutters">
			<div class="col-lg-6">
				<div class="table-responsive">
					<!-- <table class="table table-striped crypt-table-market-cap mt-4">
					  <thead>
					    <tr>
					      <th scope="col">Rank</th>
					      <th scope="col" class="text-left pl-2">Name</th>
					      <th scope="col">Market Cap</th>
					      <th scope="col">Price</th>
					      <th scope="col">24 Hour Volume</th>
					      <th scope="col">Change</th>
					      <th scope="col">7 days</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th>1</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/btc.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">Bitcoin</a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-down"> -0.04%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[65,59,81,81,56,55,40,80,90]" 
			      			data-bg = "fcbcb3"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>2</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/eth.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">Ethrium</a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-down"> -4.04%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[34,54,23,56,76,78,34,56,45]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>3</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/ltc.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">Litecoin</a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-up">3.04%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[55,40,80,90,65,59,81,81,56]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>4</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/btcc.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin">  <a href="index.html">
					      	BitCoin Cash
					      </a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-down">-0.45%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[89,23,67,45,23,45,78,34,56,67]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>5</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/xrp.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">
					      	XRP
					      </a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-up">6.04%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[34,45,56,67,65,45,34,23,45,56]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>6</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/tron.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">
					      	TRON
					      </a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-down">-6.7%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[45,34,45,56,67,45,56,67,78,67]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>7</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/stlr.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">
					      	Steller
					      </a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-up">2.04%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[56,45,67,45,34,45,56,67,56,45]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					    <tr>
					      <th>8</th>
					      <td class="text-left pl-2 font-weight-bold"><img src="images/coins/tether.png" width="20" class="pr-1 crypt-market-cap-logo" alt="coin"> <a href="index.html">
					      	Tether
					      </a></td>
					      <td>$239048209</td>
					      <td>$4559</td>
					      <td>$2344234</td>
					      <td class="crypt-up">5.04%</td>
					      <td
			      			class ="crypt-marketcap-canvas"
			      			data-charts ="[65,59,81,81,56,55,40,80,90]" 
			      			data-bg = "d3f0df"
			      			data-border = "8cd8aa">
				      		<canvas></canvas>
				      	  </td>
					    </tr>
					  </tbody>
					</table> -->
				</div>
			</div>
			<div class="col-md-12" style="padding-top:24px;">
                    <div>
                    <div class="row">
                        <div class="col-sm-6">
                        <div ><a href="" class="crypt-button-red-full">Deposited: $0</a></div>
                        </div>
                        <div class="col-sm-6">
                        <div ><a href="" class="crypt-button-green-full">Profit: $0</a></div>
                        </div>
                    </div> 
                  </div> 
                <div class="crypt-boxed-area">
                    <h6 class="crypt-bg-head"><b class="crypt-up">BUY</b> / <b class="crypt-down">SELL</b></h6>
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="crypt-buy-sell-form">
                                <p>Buy <span class="crypt-up">BTC</span> <span class="fright">Available: <b class="crypt-up">20 BTC</b></span></p>
                                <div class="crypt-buy">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Price</span> </div>
                                        <input type="text" class="form-control" placeholder="0.02323476" readonly="readonly">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Amount</span> </div>
                                        <input type="number" class="form-control">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Total</span> </div>
                                        <input type="text" class="form-control" readonly="readonly">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div>
                                        <p>Fee: <span class="fright">100%x0.2=0.02</span></p>
                                    </div>
                                    <div class="text-center mt-3 mb-3 crypt-up">
                                        <p>You will approximately pay</p>
                                        <h4>0.09834 BTC</h4></div>
                                    <div class="menu-green"><a href="" class="crypt-button-green-full">Buy</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="crypt-buy-sell-form">
                                <p>Sell <span class="crypt-down">BTC</span> <span class="fright">Available: <b class="crypt-down">20 BTC</b></span></p>
                                <div class="crypt-sell">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Price</span> </div>
                                        <input type="text" class="form-control" placeholder="0.02323476" readonly="readonly">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Amount</span> </div>
                                        <input type="number" class="form-control">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Total</span> </div>
                                        <input type="text" class="form-control" readonly="readonly">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div>
                                        <p>Fee: <span class="fright">100%x0.2=0.02</span></p>
                                    </div>
                                    <div class="text-center mt-3 mb-3 crypt-down">
                                        <p>You will approximately pay</p>
                                        <h4>0.09834 BTC</h4></div>
                                    <div><a href="" class="crypt-button-red-full">Sell</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    		</div>
			<div class="col-lg-20">
				<div id="depthchart" class="depthchart h-70 crypto-depth-chart-small-height crypt-dark-segment"></div>
				<div>
					<div class="crypt-market-status">
					<div>
					  <!-- Nav tabs -->
					  	<ul class="nav nav-tabs">
					    	<li role="presentation"><a href="#closed-orders"  class="active" data-toggle="tab">Closed Orders</a></li>
					    	<li role="presentation"><a href="#active-orders" data-toggle="tab">Active Orders</a></li>
					    	<li role="presentation"><a href="#balance" data-toggle="tab">Balance</a></li>
					  	</ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="active-orders">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th>Referral ID</th>
                                            <th>Transaction Time</th>
                                            <th>Transaction Status</th>
                                            <th>Amount Invested</th>      
                                            </tr>
                                        </thead>
                                        
                        <tbody><tr style="">
                    <td><span class="id">AV9238</span></td>
                     <td>22/04/2021</td>
                    <td><span class="success">completed</span></td>
                    <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$1425.24</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">ME1029</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">pending</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$2787.136</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">RN2576</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$1551.928</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">PR7826</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$47.508</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">QX4315</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$403.818</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">LF8406</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$15.836</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">GN9631</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$1219.372</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">FN7823</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$142.524</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">NK7205</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$5305.06</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">SN6257</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$63.344</span></td>
                                                                            </tr><tr style="">
                                                                                <td><span class="id">JK1268</span></td>
                                                                                <td>22/04/2021</td>
                                                                                <td><span class="success">completed</span></td>
                                                                                <td class="last-trade"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>$87.098</span></td>
                                                                            </tr></tbody>
                                                                                        </table>

         
                                </div>
	
	
