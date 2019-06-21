<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width" name="viewport">
	<title>{{ (isset($title))? $title : '' }}</title>
	<style type="text/css">
		@font-face {
			font-family: &#x27;
			Postmates Std& #x27;
			font-weight: 600;
			font-style: normal;
			src: local(&#x27;
			Postmates Std Bold&#x27;
			),
			url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-bold.woff) format(&#x27;
			woff&#x27;
			);
		}

		@font-face {
			font-family: &#x27;
			Postmates Std&#x27;
			;
			font-weight: 500;
			font-style: normal;
			src: local(&#x27;
			Postmates Std Medium&#x27;
			),
			url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-medium.woff) format(&#x27;
			woff&#x27;
			);
		}

		@font-face {
			font-family: &#x27;
			Postmates Std&#x27;
			;
			font-weight: 400;
			font-style: normal;
			src: local(&#x27;
			Postmates Std Regular&#x27;
			),
			url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-regular.woff) format(&#x27;
			woff&#x27;
			);
		}
	</style>

	<style media="screen and (max-width: 680px)">
		@media screen and (max-width: 680px) {
			.page-center {
				padding-left: 0 !important;
				padding-right: 0 !important;
			}

			.footer-center {
				padding-left: 20px !important;
				padding-right: 20px !important;
			}
		}
	</style>
</head>

<body style="background-color: #f4f4f5;">
	<table align="center" class="container body-border float-center" style="Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px">
		<tbody>
			<tr>
				<td style="text-align: center;">
					<table align="center" cellpadding="0" cellspacing="0" id="body" style="background-color: #fff; width: 100%; max-width: 680px; height: 100%;">
						<tbody>
							<tr>
								<td>
									<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 0px; width: 100%; padding-left: 15px; padding-right: 120px;">
										<tbody>
											<tr>
												<td style="padding-top: 24px;">
													<img align="center" src="http://fe-staging-gantigol-public.blm.solutions/images\gantigol\logo.svg" style="width: 20%;">
												</td>
											</tr>

											<th class="expander" style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;visibility:hidden;width:0">
											</th>
							</tr>
						</tbody>
					</table>
					</th>
			</tr>
		</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" class="container body-border float-center" style="Margin:0 auto;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px">
		<tbody>
			<tr style="padding:0;text-align:left;vertical-align:top">
				<td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
					<table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
						<tbody>
							<tr style="padding:0;text-align:left;vertical-align:top">
								<th class="small-12 large-12 columns first last" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px">
									<table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
										<tbody>
											<tr style="padding:0;text-align:left;vertical-align:top">
												<th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left">
													<table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
														<tbody>
															<tr style="padding:0;text-align:left;vertical-align:top">
																<td height="32px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
																	&nbsp;</td>
															</tr>
														</tbody>
													</table>
											<tr>
												<td style="padding-top: 10px; padding-bottom: 0px;">
													<div cellpadding="0" cellspacing="0" style="width: 100%">
													</div>
												</td>
											</tr>

											@yield('content')
				</td>
			</tr>
		</tbody>
	</table>



</body>



</body>

</html>