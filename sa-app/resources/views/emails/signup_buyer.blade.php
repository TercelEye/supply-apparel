@extends('layouts/email')

@section('title','New Sign Up')

@section('content')

<table mc:repeatable="layout" mc:hideable="" mc:variant="1/1 panel" class="" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f5f5f5" align="center">
			<tbody>
				<tr>
					<td height="15"></td>
				</tr>
				<tr>
					<td align="center">
						<table class="table-inner" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
							<!--img-->
							<tbody>
								<tr>
									<td style="line-height: 0px;" align="center"><img editable="" label="img" data-crop="false" mc:edit="sa-2" class="img1" style="display:block; line-height:0px; font-size:0px; border:0px;" src="img/banner.jpg" alt="img" width="600" height="auto"></td>
								</tr>
								<!--end img-->
								<tr>
									<td align="center">
										<table class="table-inner" width="550" cellspacing="0" cellpadding="0" border="0" align="center" style="border-bottom: 1px solid #ebebeb;">
											<!--title-->
											<tbody>
												<tr>
													<td height="30"></td>
												</tr>
												<tr>
													<td mc:edit="sa-3" style="font-family: 'Open Sans', sans-serif; font-size: 18px; color:#4c4c4c; font-weight: 600;" align="center">
														<singleline label="title">We’re excited to have you onboard!</singleline>
													</td>
												</tr>
												<!--end title-->
												<tr>
													<td height="20"></td>
												</tr>
												<!--content-->
												<tr>
													<td mc:edit="sa-4" style="font-family: 'Open Sans', sans-serif; font-size: 14px; line-height: 24px; color: #4c4c4c;" align="center">
														<multiline label="content">
															Supply Apparel brings you the latest fashion and trendsetting designs
															from fashionable boutiques and the coolest brands worldwide, right to
															your doorstep. Be it upbeat casuals or high-toned formals, or the
															ramp-ready designer wear - you can find it all here!
														</multiline>
													</td>
												</tr>
												<!--end content-->
												<tr>
													<td height="30"></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td align="center">
										<table class="table-inner" width="550" cellspacing="0" cellpadding="0" border="0" align="center" style="border-bottom: 1px solid #ebebeb;">
											<!--title-->
											<tbody>
												<tr>
													<td height="30"></td>
												</tr>
												<tr>
													<td mc:edit="sa-5" style="font-family: 'Open Sans', sans-serif; font-size: 18px; color:#4c4c4c; font-weight: 600;" align="center">
														<singleline label="title">Go On A Shopping Spree</singleline>
													</td>
												</tr>
												<!--end title-->
												<tr>
													<td height="20"></td>
												</tr>
												<!--content-->
												<tr>
													<td mc:edit="sa-6" style="font-family: 'Open Sans', sans-serif; font-size: 14px; line-height: 24px; color: #4c4c4c;" align="center">
														<multiline label="content">Get your wardrobe stacked with them trendy clothing &  accessories.</multiline>
													</td>
												</tr>
												<!--end content-->
												<tr>
													<td height="25"></td>
												</tr>
												<!--button-->
												<tr>
													<td align="center">
														<table style="border-radius:8px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#FF5862" align="center">
															<tbody>
																<tr>
																	<td mc:edit="sa-7" style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #ffffff; font-weight: bold; padding-left: 30px; padding-right: 30px;" align="center" height="40">
																		<a href="#" style="text-decoration:none; color:#ffffff">
																			<singleline label="button">Shop Now</singleline>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<!--end button-->
												<tr>
													<td height="30"></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td align="center">
										<table class="table-inner" width="550" cellspacing="0" cellpadding="0" border="0" align="center">
											<!--title-->
											<tbody>
												<tr>
													<td height="30"></td>
												</tr>
												<tr>
													<td mc:edit="sa-8" style="font-family: 'Open Sans', sans-serif; font-size: 18px; color:#4c4c4c; font-weight: 600;" align="center">
														<singleline label="title">Create Your Own Boutique</singleline>
													</td>
												</tr>
												<!--end title-->
												<tr>
													<td height="20"></td>
												</tr>
												<!--content-->
												<tr>
													<td mc:edit="sa-9" style="font-family: 'Open Sans', sans-serif; font-size: 14px; line-height: 24px; color: #4c4c4c;" align="center">
														<multiline label="content">Start earning by selling your apparel to millions around the world</multiline>
													</td>
												</tr>
												<!--end content-->
												<tr>
													<td height="25"></td>
												</tr>
												<!--button-->
												<tr>
													<td align="center">
														<table style="border-radius:8px;" cellspacing="0" cellpadding="0" border="0" bgcolor="#FF5862" align="center">
															<tbody>
																<tr>
																	<td mc:edit="sa-10" style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #ffffff; font-weight: bold; padding-left: 30px; padding-right: 30px;" align="center" height="40">
																		<a href="#" style="text-decoration:none; color:#ffffff">
																			<singleline label="button">Create a Boutique</singleline>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<!--end button-->
												<tr>
													<td height="40"></td>
												</tr>
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

@stop