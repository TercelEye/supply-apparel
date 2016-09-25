<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<title>@yield("title")</title>
		<style>
			.ReadMsgBody { width: 100%; background-color: #ffffff; }
			.ExternalClass { width: 100%; background-color: #ffffff; }
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
			html { width: 100%; }
			body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; font-family: 'Open Sans', Sans-serif !important; }
			table { border-spacing: 0; table-layout: fixed; margin: 0 auto; }
			table table table { table-layout: auto; }
			img { display: block; over-flow: hidden !important; }
			table td { border-collapse: collapse; }
			.yshortcuts a { border-bottom: none !important; }
			a { color: #41B3D3; text-decoration: none; }
			img:hover { opacity: 0.9 !important; }
			/*Responsive*/
			@media only screen and (max-width: 640px) {
			body { width: auto !important; font-family: 'Open Sans', Sans-serif !important; }
			table[class="table-inner"] { width: 90% !important; }
			table[class="table-full"] { width: 100% !important; text-align: center !important; }
			*[class="column"] { display: block; width: 100% !important; }
			/* Image */
			img[class="img1"] { width: 100% !important; height: auto !important; }
			}
			@media only screen and (max-width: 479px) {
			body { width: auto !important; font-family: 'Open Sans', Sans-serif !important; }
			table[class="table-inner"] { width: 90% !important; text-align: center !important; }
			table[class="table-full"] { width: 100% !important; text-align: center !important; }
			*[class="column"] { display: block; width: 100% !important; }
			/* image */
			img[class="img1"] { width: 100% !important; height: auto !important; }
			}
		</style>
	</head>
	<body style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" offset="0" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
		<table class="" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
			<tbody>
				<tr>
					<td align="center">
						<table class="table-inner" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
							<tbody>
								<tr>
									<td height="10"></td>
								</tr>
								<tr>
									<td align="center">
										<table class="table-inner" width="550" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
												<tr>
													<td>
														<!--logo-->
														<table class="table-full" cellspacing="0" cellpadding="0" border="0" align="center">
															<tbody>
																<tr>
																	<td style="line-height: 0px;" align="center"><img src="img/logo.png" alt="img" style="display:block; line-height:0px; font-size:0px; border:0px;" editable="" label="logo" data-crop="false" mc:edit="sa-1" width="87" height="46"></td>
																</tr>
															</tbody>
														</table>
														<!--end logo-->
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td height="10"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

		 @yield("content")
		

		<table class="" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f5f5f5" align="center">
			<tbody>
				<tr>
					<td height="30"></td>
				</tr>
				<tr>
					<td align="center">
						<table style="border-radius:5px" class="table-inner" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#f5f5f5" align="center">
							<tbody>
								<tr>
									<td align="center">
										<table class="table-inner" width="550" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
												<tr>
													<td>
														<table class="table-full" cellspacing="0" cellpadding="0" border="0" align="center">
															<tbody>
																<!--copyright-->
																<tr>
																	<td mc:edit="sa-13" style="font-family: 'Open sans', sans-serif; color:#717171; font-size:13px;" align="center">
																		<singleline label="copyright">&copy; 2016, Supply Apparel</singleline>
																	</td>
																</tr>
																<!--end copyright-->
																<tr>
																	<td height="20"></td>
																</tr>
																<!--unsubscribe-->
																<tr>
																	<td mc:edit="sa-14" style="font-family: 'Open sans', sans-serif; color:#0071F3; font-size:13px;" align="center">
																		<a href="#" style="text-decoration:none; color:#0071F3">unsubscribe</a>
																	</td>
																</tr>
																<!--end unsubscribe-->
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td height="30"></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>