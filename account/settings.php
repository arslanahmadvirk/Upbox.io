<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../">
	<title>Upbox</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include '../components/aside.php';?>
		<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<?php include '../components/navbar.php';?>
				<!--end::Header-->
				<!--begin::Toolbar-->
				<div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
					<!--begin::Container-->
					<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column me-3">
							<!--begin::Title-->
							<h1 class="d-flex text-dark fw-bolder my-1 fs-3">Account Settings</h1>
							<!--end::Title-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-600">
									<a href="../../demo18/dist/index.html"
										class="text-gray-600 text-hover-primary">Home</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-gray-500">Settings</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Toolbar-->
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
					<!--begin::Post-->
					<div class="content flex-row-fluid" id="kt_content">
						<!--begin::Navbar-->
						<?php include '../components/card_navbar.php';?>
						<!--end::Navbar-->
						<!--begin::Basic info-->
						<div class="card mb-5 mb-xl-10">
							<!--begin::Card header-->
							<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
								data-bs-target="#kt_account_profile_details" aria-expanded="true"
								aria-controls="kt_account_profile_details">
								<!--begin::Card title-->
								<div class="card-title m-0">
									<h3 class="fw-bolder m-0">Profile Settings</h3>
								</div>
								<!--end::Card title-->
							</div>
							<!--begin::Card header-->
							<!--begin::Content-->
							<div id="kt_account_settings_profile_details" class="collapse show">
								<!--begin::Form-->
								<form id="kt_account_profile_details_form" class="form">
									<!--begin::Card body-->
									<div class="card-body border-top p-9">
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<!--begin::Image input-->
												<div class="image-input image-input-outline" data-kt-image-input="true"
													style="background-image: url('assets/media/svg/avatars/blank.svg')">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-125px h-125px"
														style="background-image: url(assets/media/avatars/300-1.jpg)">
													</div>
													<!--end::Preview existing avatar-->
													<!--begin::Label-->
													<label
														class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
														data-kt-image-input-action="change" data-bs-toggle="tooltip"
														title="Change avatar">
														<i class="bi bi-pencil-fill fs-7"></i>
														<!--begin::Inputs-->
														<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
														<input type="hidden" name="avatar_remove" />
														<!--end::Inputs-->
													</label>
													<!--end::Label-->
													<!--begin::Cancel-->
													<span
														class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
														data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
														title="Cancel avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Cancel-->
													<!--begin::Remove-->
													<span
														class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
														data-kt-image-input-action="remove" data-bs-toggle="tooltip"
														title="Remove avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Remove-->
												</div>
												<!--end::Image input-->
												<!--begin::Hint-->
												<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
												<!--end::Hint-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label required fw-bold fs-6">Full
												Name</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<!--begin::Row-->
												<div class="row">
													<!--begin::Col-->
													<div class="col-lg-6 fv-row">
														<input type="text" name="fname"
															class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
															placeholder="First name" value="Max" />
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-6 fv-row">
														<input type="text" name="lname"
															class="form-control form-control-lg form-control-solid"
															placeholder="Last name" value="Smith" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<input type="text" name="company"
													class="form-control form-control-lg form-control-solid"
													placeholder="Company name" value="Keenthemes" />
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label fw-bold fs-6">
												<span class="required">Contact Phone</span>
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
													title="Phone number must be active"></i>
											</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<input type="tel" name="phone"
													class="form-control form-control-lg form-control-solid"
													placeholder="Phone number" value="044 3276 454 935" />
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<input type="text" name="website"
													class="form-control form-control-lg form-control-solid"
													placeholder="Company website" value="keenthemes.com" />
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label fw-bold fs-6">
												<span class="required">Country</span>
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
													title="Country of origination"></i>
											</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<select name="country" aria-label="Select a Country"
													data-control="select2" data-placeholder="Select a country..."
													class="form-select form-select-solid form-select-lg fw-bold">
													<option value="">Select a Country...</option>
													<option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan
													</option>
													<option data-kt-flag="flags/aland-islands.svg" value="AX">Aland
														Islands</option>
													<option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
													<option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
													<option data-kt-flag="flags/american-samoa.svg" value="AS">American
														Samoa</option>
													<option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
													<option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
													<option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla
													</option>
													<option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">
														Antigua and Barbuda</option>
													<option data-kt-flag="flags/argentina.svg" value="AR">Argentina
													</option>
													<option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
													<option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
													<option data-kt-flag="flags/australia.svg" value="AU">Australia
													</option>
													<option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
													<option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan
													</option>
													<option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
													<option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
													<option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh
													</option>
													<option data-kt-flag="flags/barbados.svg" value="BB">Barbados
													</option>
													<option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
													<option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
													<option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
													<option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
													<option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
													<option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
													<option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia,
														Plurinational State of</option>
													<option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint
														Eustatius and Saba</option>
													<option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">
														Bosnia and Herzegovina</option>
													<option data-kt-flag="flags/botswana.svg" value="BW">Botswana
													</option>
													<option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
													<option data-kt-flag="flags/british-indian-ocean-territory.svg"
														value="IO">British Indian Ocean Territory</option>
													<option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam
													</option>
													<option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria
													</option>
													<option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina
														Faso</option>
													<option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
													<option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia
													</option>
													<option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon
													</option>
													<option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
													<option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde
													</option>
													<option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman
														Islands</option>
													<option data-kt-flag="flags/central-african-republic.svg"
														value="CF">Central African Republic</option>
													<option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
													<option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
													<option data-kt-flag="flags/china.svg" value="CN">China</option>
													<option data-kt-flag="flags/christmas-island.svg" value="CX">
														Christmas Island</option>
													<option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos
														(Keeling) Islands</option>
													<option data-kt-flag="flags/colombia.svg" value="CO">Colombia
													</option>
													<option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
													<option data-kt-flag="flags/cook-islands.svg" value="CK">Cook
														Islands</option>
													<option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica
													</option>
													<option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte
														d'Ivoire</option>
													<option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
													<option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
													<option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
													<option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech
														Republic</option>
													<option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
													<option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti
													</option>
													<option data-kt-flag="flags/dominica.svg" value="DM">Dominica
													</option>
													<option data-kt-flag="flags/dominican-republic.svg" value="DO">
														Dominican Republic</option>
													<option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
													<option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
													<option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador
													</option>
													<option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">
														Equatorial Guinea</option>
													<option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
													<option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
													<option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia
													</option>
													<option data-kt-flag="flags/falkland-islands.svg" value="FK">
														Falkland Islands (Malvinas)</option>
													<option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
													<option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
													<option data-kt-flag="flags/france.svg" value="FR">France</option>
													<option data-kt-flag="flags/french-polynesia.svg" value="PF">French
														Polynesia</option>
													<option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
													<option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
													<option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
													<option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
													<option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
													<option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar
													</option>
													<option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
													<option data-kt-flag="flags/greenland.svg" value="GL">Greenland
													</option>
													<option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
													<option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
													<option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala
													</option>
													<option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey
													</option>
													<option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
													<option data-kt-flag="flags/guinea-bissau.svg" value="GW">
														Guinea-Bissau</option>
													<option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
													<option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See
														(Vatican City State)</option>
													<option data-kt-flag="flags/honduras.svg" value="HN">Honduras
													</option>
													<option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong
													</option>
													<option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
													<option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
													<option data-kt-flag="flags/india.svg" value="IN">India</option>
													<option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia
													</option>
													<option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic
														Republic of</option>
													<option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
													<option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
													<option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man
													</option>
													<option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
													<option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
													<option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
													<option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
													<option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
													<option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
													<option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan
													</option>
													<option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
													<option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati
													</option>
													<option data-kt-flag="flags/north-korea.svg" value="KP">Korea,
														Democratic People's Republic of</option>
													<option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
													<option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan
													</option>
													<option data-kt-flag="flags/laos.svg" value="LA">Lao People's
														Democratic Republic</option>
													<option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
													<option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
													<option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
													<option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
													<option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
													<option data-kt-flag="flags/liechtenstein.svg" value="LI">
														Liechtenstein</option>
													<option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania
													</option>
													<option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg
													</option>
													<option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
													<option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar
													</option>
													<option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
													<option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia
													</option>
													<option data-kt-flag="flags/maldives.svg" value="MV">Maldives
													</option>
													<option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
													<option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
													<option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall
														Islands</option>
													<option data-kt-flag="flags/martinique.svg" value="MQ">Martinique
													</option>
													<option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania
													</option>
													<option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius
													</option>
													<option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
													<option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia,
														Federated States of</option>
													<option data-kt-flag="flags/moldova.svg" value="MD">Moldova,
														Republic of</option>
													<option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
													<option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia
													</option>
													<option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro
													</option>
													<option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat
													</option>
													<option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
													<option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique
													</option>
													<option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
													<option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
													<option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
													<option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
													<option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands
													</option>
													<option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand
													</option>
													<option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua
													</option>
													<option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
													<option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
													<option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
													<option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk
														Island</option>
													<option data-kt-flag="flags/northern-mariana-islands.svg"
														value="MP">Northern Mariana Islands</option>
													<option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
													<option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
													<option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan
													</option>
													<option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
													<option data-kt-flag="flags/palestine.svg" value="PS">Palestinian
														Territory, Occupied</option>
													<option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
													<option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua
														New Guinea</option>
													<option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay
													</option>
													<option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
													<option data-kt-flag="flags/philippines.svg" value="PH">Philippines
													</option>
													<option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
													<option data-kt-flag="flags/portugal.svg" value="PT">Portugal
													</option>
													<option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico
													</option>
													<option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
													<option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
													<option data-kt-flag="flags/russia.svg" value="RU">Russian
														Federation</option>
													<option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
													<option data-kt-flag="flags/st-barts.svg" value="BL">Saint
														Barthélemy</option>
													<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">
														Saint Kitts and Nevis</option>
													<option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia
													</option>
													<option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint
														Martin (French part)</option>
													<option data-kt-flag="flags/st-vincent-and-the-grenadines.svg"
														value="VC">Saint Vincent and the Grenadines</option>
													<option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
													<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino
													</option>
													<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao
														Tome and Principe</option>
													<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi
														Arabia</option>
													<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
													<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
													<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles
													</option>
													<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra
														Leone</option>
													<option data-kt-flag="flags/singapore.svg" value="SG">Singapore
													</option>
													<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint
														Maarten (Dutch part)</option>
													<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia
													</option>
													<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia
													</option>
													<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon
														Islands</option>
													<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
													<option data-kt-flag="flags/south-africa.svg" value="ZA">South
														Africa</option>
													<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea
													</option>
													<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan
													</option>
													<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
													<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka
													</option>
													<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
													<option data-kt-flag="flags/suriname.svg" value="SR">Suriname
													</option>
													<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland
													</option>
													<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
													<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland
													</option>
													<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab
														Republic</option>
													<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province
														of China</option>
													<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan
													</option>
													<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania,
														United Republic of</option>
													<option data-kt-flag="flags/thailand.svg" value="TH">Thailand
													</option>
													<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
													<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
													<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
													<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">
														Trinidad and Tobago</option>
													<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
													<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
													<option data-kt-flag="flags/turkmenistan.svg" value="TM">
														Turkmenistan</option>
													<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks
														and Caicos Islands</option>
													<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
													<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
													<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
													<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">
														United Arab Emirates</option>
													<option data-kt-flag="flags/united-kingdom.svg" value="GB">United
														Kingdom</option>
													<option data-kt-flag="flags/united-states.svg" value="US">United
														States</option>
													<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
													<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan
													</option>
													<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
													<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela,
														Bolivarian Republic of</option>
													<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
													<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin
														Islands</option>
													<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
													<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
													<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe
													</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label
												class="col-lg-4 col-form-label required fw-bold fs-6">Language</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<!--begin::Input-->
												<select name="language" aria-label="Select a Language"
													data-control="select2" data-placeholder="Select a language..."
													class="form-select form-select-solid form-select-lg">
													<option value="">Select a Language...</option>
													<option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
														Indonesia - Indonesian</option>
													<option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
														- Malay</option>
													<option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan
													</option>
													<option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština -
														Czech</option>
													<option data-kt-flag="flags/netherlands.svg" value="da">Dansk -
														Danish</option>
													<option data-kt-flag="flags/germany.svg" value="de">Deutsch - German
													</option>
													<option data-kt-flag="flags/united-kingdom.svg" value="en">English
													</option>
													<option data-kt-flag="flags/united-kingdom.svg" value="en-gb">
														English UK - British English</option>
													<option data-kt-flag="flags/spain.svg" value="es">Español - Spanish
													</option>
													<option data-kt-flag="flags/philippines.svg" value="fil">Filipino
													</option>
													<option data-kt-flag="flags/france.svg" value="fr">Français - French
													</option>
													<option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish
														(beta)</option>
													<option data-kt-flag="flags/greenland.svg" value="gl">Galego -
														Galician (beta)</option>
													<option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski -
														Croatian</option>
													<option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian
													</option>
													<option data-kt-flag="flags/hungary.svg" value="hu">Magyar -
														Hungarian</option>
													<option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands -
														Dutch</option>
													<option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian
													</option>
													<option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish
													</option>
													<option data-kt-flag="flags/portugal.svg" value="pt">Português -
														Portuguese</option>
													<option data-kt-flag="flags/romania.svg" value="ro">Română -
														Romanian</option>
													<option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina -
														Slovak</option>
													<option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish
													</option>
													<option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska -
														Swedish</option>
													<option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng
														Việt - Vietnamese</option>
													<option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish
													</option>
													<option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek
													</option>
													<option data-kt-flag="flags/bulgaria.svg" value="bg">Български език
														- Bulgarian</option>
													<option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian
													</option>
													<option data-kt-flag="flags/suriname.svg" value="sr">Српски -
														Serbian</option>
													<option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова
														- Ukrainian</option>
													<option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew
													</option>
													<option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu
														(beta)</option>
													<option data-kt-flag="flags/argentina.svg" value="ar">العربية -
														Arabic</option>
													<option data-kt-flag="flags/argentina.svg" value="fa">فارسی -
														Persian</option>
													<option data-kt-flag="flags/mauritania.svg" value="mr">मराठी -
														Marathi</option>
													<option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi
													</option>
													<option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা -
														Bangla</option>
													<option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati
													</option>
													<option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil
													</option>
													<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">
														ಕನ್ನಡ - Kannada</option>
													<option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai
													</option>
													<option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean
													</option>
													<option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese
													</option>
													<option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 -
														Simplified Chinese</option>
													<option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 -
														Traditional Chinese</option>
												</select>
												<!--end::Input-->
												<!--begin::Hint-->
												<div class="form-text">Please select a preferred language, including
													date, time, and number formatting.</div>
												<!--end::Hint-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label required fw-bold fs-6">Time
												Zone</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<select name="timezone" aria-label="Select a Timezone"
													data-control="select2" data-placeholder="Select a timezone.."
													class="form-select form-select-solid form-select-lg">
													<option value="">Select a Timezone..</option>
													<option data-bs-offset="-39600"
														value="International Date Line West">(GMT-11:00) International
														Date Line West</option>
													<option data-bs-offset="-39600" value="Midway Island">(GMT-11:00)
														Midway Island</option>
													<option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa
													</option>
													<option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii
													</option>
													<option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska
													</option>
													<option data-bs-offset="-25200"
														value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time
														(US &amp; Canada)</option>
													<option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana
													</option>
													<option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona
													</option>
													<option data-bs-offset="-21600"
														value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain
														Time (US &amp; Canada)</option>
													<option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00)
														Chihuahua</option>
													<option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00)
														Mazatlan</option>
													<option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00)
														Saskatchewan</option>
													<option data-bs-offset="-21600" value="Central America">(GMT-06:00)
														Central America</option>
													<option data-bs-offset="-18000"
														value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time
														(US &amp; Canada)</option>
													<option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00)
														Guadalajara</option>
													<option data-bs-offset="-18000" value="Mexico City">(GMT-05:00)
														Mexico City</option>
													<option data-bs-offset="-18000" value="Monterrey">(GMT-05:00)
														Monterrey</option>
													<option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota
													</option>
													<option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima
													</option>
													<option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito
													</option>
													<option data-bs-offset="-14400"
														value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time
														(US &amp; Canada)</option>
													<option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00)
														Indiana (East)</option>
													<option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas
													</option>
													<option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz
													</option>
													<option data-bs-offset="-14400" value="Georgetown">(GMT-04:00)
														Georgetown</option>
													<option data-bs-offset="-10800" value="Atlantic Time (Canada)">
														(GMT-03:00) Atlantic Time (Canada)</option>
													<option data-bs-offset="-10800" value="Santiago">(GMT-03:00)
														Santiago</option>
													<option data-bs-offset="-10800" value="Brasilia">(GMT-03:00)
														Brasilia</option>
													<option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00)
														Buenos Aires</option>
													<option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30)
														Newfoundland</option>
													<option data-bs-offset="-7200" value="Greenland">(GMT-02:00)
														Greenland</option>
													<option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00)
														Mid-Atlantic</option>
													<option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00)
														Cape Verde Is.</option>
													<option data-bs-offset="0" value="Azores">(GMT) Azores</option>
													<option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
													<option data-bs-offset="0" value="UTC">(GMT) UTC</option>
													<option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin
													</option>
													<option data-bs-offset="3600" value="Edinburgh">(GMT+01:00)
														Edinburgh</option>
													<option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon
													</option>
													<option data-bs-offset="3600" value="London">(GMT+01:00) London
													</option>
													<option data-bs-offset="3600" value="Casablanca">(GMT+01:00)
														Casablanca</option>
													<option data-bs-offset="3600" value="West Central Africa">
														(GMT+01:00) West Central Africa</option>
													<option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade
													</option>
													<option data-bs-offset="7200" value="Bratislava">(GMT+02:00)
														Bratislava</option>
													<option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest
													</option>
													<option data-bs-offset="7200" value="Ljubljana">(GMT+02:00)
														Ljubljana</option>
													<option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague
													</option>
													<option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo
													</option>
													<option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje
													</option>
													<option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw
													</option>
													<option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb
													</option>
													<option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels
													</option>
													<option data-bs-offset="7200" value="Copenhagen">(GMT+02:00)
														Copenhagen</option>
													<option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid
													</option>
													<option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris
													</option>
													<option data-bs-offset="7200" value="Amsterdam">(GMT+02:00)
														Amsterdam</option>
													<option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin
													</option>
													<option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
													<option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
													<option data-bs-offset="7200" value="Stockholm">(GMT+02:00)
														Stockholm</option>
													<option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna
													</option>
													<option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo
													</option>
													<option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare
													</option>
													<option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria
													</option>
													<option data-bs-offset="10800" value="Bucharest">(GMT+03:00)
														Bucharest</option>
													<option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki
													</option>
													<option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev
													</option>
													<option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv
													</option>
													<option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga
													</option>
													<option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia
													</option>
													<option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn
													</option>
													<option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius
													</option>
													<option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens
													</option>
													<option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul
													</option>
													<option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk
													</option>
													<option data-bs-offset="10800" value="Jerusalem">(GMT+03:00)
														Jerusalem</option>
													<option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow
													</option>
													<option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00)
														St. Petersburg</option>
													<option data-bs-offset="10800" value="Volgograd">(GMT+03:00)
														Volgograd</option>
													<option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait
													</option>
													<option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh
													</option>
													<option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi
													</option>
													<option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad
													</option>
													<option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu
														Dhabi</option>
													<option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat
													</option>
													<option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku
													</option>
													<option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi
													</option>
													<option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan
													</option>
													<option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran
													</option>
													<option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul
													</option>
													<option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00)
														Ekaterinburg</option>
													<option data-bs-offset="18000" value="Islamabad">(GMT+05:00)
														Islamabad</option>
													<option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi
													</option>
													<option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent
													</option>
													<option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai
													</option>
													<option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata
													</option>
													<option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai
													</option>
													<option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New
														Delhi</option>
													<option data-bs-offset="19800" value="Sri Jayawardenepura">
														(GMT+05:30) Sri Jayawardenepura</option>
													<option data-bs-offset="20700" value="Kathmandu">(GMT+05:45)
														Kathmandu</option>
													<option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana
													</option>
													<option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka
													</option>
													<option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty
													</option>
													<option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi
													</option>
													<option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon
													</option>
													<option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00)
														Novosibirsk</option>
													<option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok
													</option>
													<option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi
													</option>
													<option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta
													</option>
													<option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00)
														Krasnoyarsk</option>
													<option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing
													</option>
													<option data-bs-offset="28800" value="Chongqing">(GMT+08:00)
														Chongqing</option>
													<option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong
														Kong</option>
													<option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00)
														Kuala Lumpur</option>
													<option data-bs-offset="28800" value="Singapore">(GMT+08:00)
														Singapore</option>
													<option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei
													</option>
													<option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth
													</option>
													<option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk
													</option>
													<option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00)
														Ulaan Bataar</option>
													<option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul
													</option>
													<option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka
													</option>
													<option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo
													</option>
													<option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo
													</option>
													<option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk
													</option>
													<option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin
													</option>
													<option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide
													</option>
													<option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra
													</option>
													<option data-bs-offset="36000" value="Melbourne">(GMT+10:00)
														Melbourne</option>
													<option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney
													</option>
													<option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane
													</option>
													<option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart
													</option>
													<option data-bs-offset="36000" value="Vladivostok">(GMT+10:00)
														Vladivostok</option>
													<option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam
													</option>
													<option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port
														Moresby</option>
													<option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00)
														Solomon Is.</option>
													<option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan
													</option>
													<option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New
														Caledonia</option>
													<option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji
													</option>
													<option data-bs-offset="43200" value="Kamchatka">(GMT+12:00)
														Kamchatka</option>
													<option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00)
														Marshall Is.</option>
													<option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland
													</option>
													<option data-bs-offset="43200" value="Wellington">(GMT+12:00)
														Wellington</option>
													<option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00)
														Nuku'alofa</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label fw-bold fs-6">Currency</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<select name="currnecy" aria-label="Select a Currency"
													data-control="select2" data-placeholder="Select a currency.."
													class="form-select form-select-solid form-select-lg">
													<option value="">Select a currency..</option>
													<option data-kt-flag="flags/united-states.svg" value="USD">
														<b>USD</b>&#160;-&#160;USA dollar
													</option>
													<option data-kt-flag="flags/united-kingdom.svg" value="GBP">
														<b>GBP</b>&#160;-&#160;British pound
													</option>
													<option data-kt-flag="flags/australia.svg" value="AUD">
														<b>AUD</b>&#160;-&#160;Australian dollar
													</option>
													<option data-kt-flag="flags/japan.svg" value="JPY">
														<b>JPY</b>&#160;-&#160;Japanese yen
													</option>
													<option data-kt-flag="flags/sweden.svg" value="SEK">
														<b>SEK</b>&#160;-&#160;Swedish krona
													</option>
													<option data-kt-flag="flags/canada.svg" value="CAD">
														<b>CAD</b>&#160;-&#160;Canadian dollar
													</option>
													<option data-kt-flag="flags/switzerland.svg" value="CHF">
														<b>CHF</b>&#160;-&#160;Swiss franc
													</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-6">
											<!--begin::Label-->
											<label
												class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
												<!--begin::Options-->
												<div class="d-flex align-items-center mt-3">
													<!--begin::Option-->
													<label class="form-check form-check-inline form-check-solid me-5">
														<input class="form-check-input" name="communication[]"
															type="checkbox" value="1" />
														<span class="fw-bold ps-2 fs-6">Email</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label class="form-check form-check-inline form-check-solid">
														<input class="form-check-input" name="communication[]"
															type="checkbox" value="2" />
														<span class="fw-bold ps-2 fs-6">Phone</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Options-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-0">
											<!--begin::Label-->
											<label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
											<!--begin::Label-->
											<!--begin::Label-->
											<div class="col-lg-8 d-flex align-items-center">
												<div class="form-check form-check-solid form-switch fv-row">
													<input class="form-check-input w-45px h-30px" type="checkbox"
														id="allowmarketing" checked="checked" />
													<label class="form-check-label" for="allowmarketing"></label>
												</div>
											</div>
											<!--begin::Label-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Card body-->
									<!--begin::Actions-->
									<div class="card-footer d-flex justify-content-end py-6 px-9">
										<button type="reset"
											class="btn btn-light btn-active-light-primary me-2">Discard</button>
										<button type="submit" class="btn btn-primary"
											id="kt_account_profile_details_submit">Save Changes</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Basic info-->
						<!--begin::Sign-in Method-->
						<div class="card mb-5 mb-xl-10">
							<!--begin::Card header-->
							<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
								data-bs-target="#kt_account_signin_method">
								<div class="card-title m-0">
									<h3 class="fw-bolder m-0">Sign-in Method</h3>
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Content-->
							<div id="kt_account_settings_signin_method" class="collapse show">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									<!--begin::Email Address-->
									<div class="d-flex flex-wrap align-items-center">
										<!--begin::Label-->
										<div id="kt_signin_email">
											<div class="fs-6 fw-bolder mb-1">Email Address</div>
											<div class="fw-bold text-gray-600">support@keenthemes.com</div>
										</div>
										<!--end::Label-->
										<!--begin::Edit-->
										<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
											<!--begin::Form-->
											<form id="kt_signin_change_email" class="form" novalidate="novalidate">
												<div class="row mb-6">
													<div class="col-lg-6 mb-4 mb-lg-0">
														<div class="fv-row mb-0">
															<label for="emailaddress"
																class="form-label fs-6 fw-bolder mb-3">Enter New Email
																Address</label>
															<input type="email"
																class="form-control form-control-lg form-control-solid"
																id="emailaddress" placeholder="Email Address"
																name="emailaddress" value="support@keenthemes.com" />
														</div>
													</div>
													<div class="col-lg-6">
														<div class="fv-row mb-0">
															<label for="confirmemailpassword"
																class="form-label fs-6 fw-bolder mb-3">Confirm
																Password</label>
															<input type="password"
																class="form-control form-control-lg form-control-solid"
																name="confirmemailpassword" id="confirmemailpassword" />
														</div>
													</div>
												</div>
												<div class="d-flex">
													<button id="kt_signin_submit" type="button"
														class="btn btn-primary me-2 px-6">Update Email</button>
													<button id="kt_signin_cancel" type="button"
														class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Edit-->
										<!--begin::Action-->
										<div id="kt_signin_email_button" class="ms-auto">
											<button class="btn btn-light btn-active-light-primary">Change Email</button>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Email Address-->
									<!--begin::Separator-->
									<div class="separator separator-dashed my-6"></div>
									<!--end::Separator-->
									<!--begin::Password-->
									<div class="d-flex flex-wrap align-items-center mb-10">
										<!--begin::Label-->
										<div id="kt_signin_password">
											<div class="fs-6 fw-bolder mb-1">Password</div>
											<div class="fw-bold text-gray-600">************</div>
										</div>
										<!--end::Label-->
										<!--begin::Edit-->
										<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
											<!--begin::Form-->
											<form id="kt_signin_change_password" class="form" novalidate="novalidate">
												<div class="row mb-1">
													<div class="col-lg-4">
														<div class="fv-row mb-0">
															<label for="currentpassword"
																class="form-label fs-6 fw-bolder mb-3">Current
																Password</label>
															<input type="password"
																class="form-control form-control-lg form-control-solid"
																name="currentpassword" id="currentpassword" />
														</div>
													</div>
													<div class="col-lg-4">
														<div class="fv-row mb-0">
															<label for="newpassword"
																class="form-label fs-6 fw-bolder mb-3">New
																Password</label>
															<input type="password"
																class="form-control form-control-lg form-control-solid"
																name="newpassword" id="newpassword" />
														</div>
													</div>
													<div class="col-lg-4">
														<div class="fv-row mb-0">
															<label for="confirmpassword"
																class="form-label fs-6 fw-bolder mb-3">Confirm New
																Password</label>
															<input type="password"
																class="form-control form-control-lg form-control-solid"
																name="confirmpassword" id="confirmpassword" />
														</div>
													</div>
												</div>
												<div class="form-text mb-5">Password must be at least 8 character and
													contain symbols</div>
												<div class="d-flex">
													<button id="kt_password_submit" type="button"
														class="btn btn-primary me-2 px-6">Update Password</button>
													<button id="kt_password_cancel" type="button"
														class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Edit-->
										<!--begin::Action-->
										<div id="kt_signin_password_button" class="ms-auto">
											<button class="btn btn-light btn-active-light-primary">Reset
												Password</button>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Password-->
									<!--begin::Notice-->
									<div
										class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor" />
												<path
													d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-bold">
												<h4 class="text-gray-900 fw-bolder">Secure Your Account</h4>
												<div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an
													extra layer of security to your account. To log in, in addition
													you'll need to provide a 6 digit code</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
												data-bs-toggle="modal"
												data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Sign-in Method-->
						<!--begin::Connected Accounts-->
						<div class="card mb-5 mb-xl-10">
							<!--begin::Card header-->
							<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
								data-bs-target="#kt_account_connected_accounts" aria-expanded="true"
								aria-controls="kt_account_connected_accounts">
								<div class="card-title m-0">
									<h3 class="fw-bolder m-0">Connected Accounts</h3>
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Content-->
							<div id="kt_account_settings_connected_accounts" class="collapse show">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									<!--begin::Notice-->
									<div
										class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
													d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
													fill="currentColor" />
												<path
													d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1">
											<!--begin::Content-->
											<div class="fw-bold">
												<div class="fs-6 text-gray-700">Two-factor authentication adds an extra
													layer of security to your account. To log in, in you'll need to
													provide a 4 digit amazing code.
													<a href="#" class="fw-bolder">Learn More</a>
												</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
									<!--begin::Items-->
									<div class="py-2">
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<div class="d-flex">
												<img src="assets/media/svg/brand-logos/google-icon.svg"
													class="w-30px me-6" alt="" />
												<div class="d-flex flex-column">
													<a href="#"
														class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
													<div class="fs-6 fw-bold text-gray-400">Plan properly your workflow
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-end">
												<div class="form-check form-check-solid form-switch">
													<input class="form-check-input w-45px h-30px" type="checkbox"
														id="googleswitch" checked="checked" />
													<label class="form-check-label" for="googleswitch"></label>
												</div>
											</div>
										</div>
										<!--end::Item-->
										<div class="separator separator-dashed my-5"></div>
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<div class="d-flex">
												<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6"
													alt="" />
												<div class="d-flex flex-column">
													<a href="#"
														class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
													<div class="fs-6 fw-bold text-gray-400">Keep eye on on your
														Repositories</div>
												</div>
											</div>
											<div class="d-flex justify-content-end">
												<div class="form-check form-check-solid form-switch">
													<input class="form-check-input w-45px h-30px" type="checkbox"
														id="githubswitch" checked="checked" />
													<label class="form-check-label" for="githubswitch"></label>
												</div>
											</div>
										</div>
										<!--end::Item-->
										<div class="separator separator-dashed my-5"></div>
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<div class="d-flex">
												<img src="assets/media/svg/brand-logos/slack-icon.svg"
													class="w-30px me-6" alt="" />
												<div class="d-flex flex-column">
													<a href="#"
														class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
													<div class="fs-6 fw-bold text-gray-400">Integrate Projects
														Discussions</div>
												</div>
											</div>
											<div class="d-flex justify-content-end">
												<div class="form-check form-check-solid form-switch">
													<input class="form-check-input w-45px h-30px" type="checkbox"
														id="slackswitch" />
													<label class="form-check-label" for="slackswitch"></label>
												</div>
											</div>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
									<button class="btn btn-primary">Save Changes</button>
								</div>
								<!--end::Card footer-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Connected Accounts-->
						<!--begin::Notifications-->
						<div class="card mb-5 mb-xl-10">
							<!--begin::Card header-->
							<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
								data-bs-target="#kt_account_email_preferences" aria-expanded="true"
								aria-controls="kt_account_email_preferences">
								<div class="card-title m-0">
									<h3 class="fw-bolder m-0">Email Preferences</h3>
								</div>
							</div>
							<!--begin::Card header-->
							<!--begin::Content-->
							<div id="kt_account_settings_email_preferences" class="collapse show">
								<!--begin::Form-->
								<form class="form">
									<!--begin::Card body-->
									<div class="card-body border-top px-9 py-9">
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Successful Payments</span>
												<span class="text-muted fs-6">Receive a notification for every
													successful payment.</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" checked="checked" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Payouts</span>
												<span class="text-muted fs-6">Receive a notification for every initiated
													payout.</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Fee Collection</span>
												<span class="text-muted fs-6">Receive a notification each time you
													collect a fee from sales</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" checked="checked" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Customer Payment Dispute</span>
												<span class="text-muted fs-6">Receive a notification if a payment is
													disputed by a customer and for dispute purposes.</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Refund Alerts</span>
												<span class="text-muted fs-6">Receive a notification if a payment is
													stated as risk by the Finance Department.</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" checked="checked" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Invoice Payments</span>
												<span class="text-muted fs-6">Receive a notification if a customer sends
													an incorrect amount to pay their invoice.</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="form-check form-check-custom form-check-solid align-items-start">
											<!--begin::Input-->
											<input class="form-check-input me-3" type="checkbox"
												name="email-preferences[]" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label d-flex flex-column align-items-start">
												<span class="fw-bolder fs-5 mb-0">Webhook API Endpoints</span>
												<span class="text-muted fs-6">Receive notifications for consistently
													failing webhook API endpoints.</span>
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Card body-->
									<!--begin::Card footer-->
									<div class="card-footer d-flex justify-content-end py-6 px-9">
										<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
										<button class="btn btn-primary px-6">Save Changes</button>
									</div>
									<!--end::Card footer-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Notifications-->
						<!--begin::Notifications-->
						<div class="card mb-5 mb-xl-10">
							<!--begin::Card header-->
							<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
								data-bs-target="#kt_account_notifications" aria-expanded="true"
								aria-controls="kt_account_notifications">
								<div class="card-title m-0">
									<h3 class="fw-bolder m-0">Notifications</h3>
								</div>
							</div>
							<!--begin::Card header-->
							<!--begin::Content-->
							<div id="kt_account_settings_notifications" class="collapse show">
								<!--begin::Form-->
								<form class="form">
									<!--begin::Card body-->
									<div class="card-body border-top px-9 pt-3 pb-4">
										<!--begin::Table-->
										<div class="table-responsive">
											<table class="table table-row-dashed border-gray-300 align-middle gy-6">
												<tbody class="fs-6 fw-bold">
													<!--begin::Table row-->
													<tr>
														<td class="min-w-250px fs-4 fw-bolder">Notifications</td>
														<td class="w-125px">
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="kt_settings_notification_email"
																	checked="checked" data-kt-check="true"
																	data-kt-check-target="[data-kt-settings-notification=email]" />
																<label class="form-check-label ps-2"
																	for="kt_settings_notification_email">Email</label>
															</div>
														</td>
														<td class="w-125px">
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="kt_settings_notification_phone"
																	checked="checked" data-kt-check="true"
																	data-kt-check-target="[data-kt-settings-notification=phone]" />
																<label class="form-check-label ps-2"
																	for="kt_settings_notification_phone">Phone</label>
															</div>
														</td>
													</tr>
													<!--begin::Table row-->
													<!--begin::Table row-->
													<tr>
														<td>Billing Updates</td>
														<td>
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox"
																	value="1" id="billing1" checked="checked"
																	data-kt-settings-notification="email" />
																<label class="form-check-label ps-2"
																	for="billing1"></label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="billing2" checked="checked"
																	data-kt-settings-notification="phone" />
																<label class="form-check-label ps-2"
																	for="billing2"></label>
															</div>
														</td>
													</tr>
													<!--begin::Table row-->
													<!--begin::Table row-->
													<tr>
														<td>New Team Members</td>
														<td>
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="team1" checked="checked"
																	data-kt-settings-notification="email" />
																<label class="form-check-label ps-2"
																	for="team1"></label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="team2" data-kt-settings-notification="phone" />
																<label class="form-check-label ps-2"
																	for="team2"></label>
															</div>
														</td>
													</tr>
													<!--begin::Table row-->
													<!--begin::Table row-->
													<tr>
														<td>Completed Projects</td>
														<td>
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="project1"
																	data-kt-settings-notification="email" />
																<label class="form-check-label ps-2"
																	for="project1"></label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="project2" checked="checked"
																	data-kt-settings-notification="phone" />
																<label class="form-check-label ps-2"
																	for="project2"></label>
															</div>
														</td>
													</tr>
													<!--begin::Table row-->
													<!--begin::Table row-->
													<tr>
														<td class="border-bottom-0">Newsletters</td>
														<td class="border-bottom-0">
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="newsletter1"
																	data-kt-settings-notification="email" />
																<label class="form-check-label ps-2"
																	for="newsletter1"></label>
															</div>
														</td>
														<td class="border-bottom-0">
															<div class="form-check form-check-solid">
																<input class="form-check-input" type="checkbox" value=""
																	id="newsletter2"
																	data-kt-settings-notification="phone" />
																<label class="form-check-label ps-2"
																	for="newsletter2"></label>
															</div>
														</td>
													</tr>
													<!--begin::Table row-->
												</tbody>
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
									<!--begin::Card footer-->
									<div class="card-footer d-flex justify-content-end py-6 px-9">
										<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
										<button class="btn btn-primary px-6">Save Changes</button>
									</div>
									<!--end::Card footer-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Notifications-->
						<!--begin::Deactivate Account-->
						<div class="card">
							<!--begin::Card header-->
							<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
								data-bs-target="#kt_account_deactivate" aria-expanded="true"
								aria-controls="kt_account_deactivate">
								<div class="card-title m-0">
									<h3 class="fw-bolder m-0">Deactivate Account</h3>
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Content-->
							<div id="kt_account_settings_deactivate" class="collapse show">
								<!--begin::Form-->
								<form id="kt_account_deactivate_form" class="form">
									<!--begin::Card body-->
									<div class="card-body border-top p-9">
										<!--begin::Notice-->
										<div
											class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="currentColor" />
													<rect x="11" y="14" width="7" height="2" rx="1"
														transform="rotate(-90 11 14)" fill="currentColor" />
													<rect x="11" y="17" width="2" height="2" rx="1"
														transform="rotate(-90 11 17)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1">
												<!--begin::Content-->
												<div class="fw-bold">
													<h4 class="text-gray-900 fw-bolder">You Are Deactivating Your
														Account</h4>
													<div class="fs-6 text-gray-700">For extra security, this requires
														you to confirm your email or phone number when you reset
														yousignr password.
														<br />
														<a class="fw-bolder" href="#">Learn more</a>
													</div>
												</div>
												<!--end::Content-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
										<!--begin::Form input row-->
										<div class="form-check form-check-solid fv-row">
											<input name="deactivate" class="form-check-input" type="checkbox" value=""
												id="deactivate" />
											<label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm
												my account deactivation</label>
										</div>
										<!--end::Form input row-->
									</div>
									<!--end::Card body-->
									<!--begin::Card footer-->
									<div class="card-footer d-flex justify-content-end py-6 px-9">
										<button id="kt_account_deactivate_account_submit" type="submit"
											class="btn btn-danger fw-bold">Deactivate Account</button>
									</div>
									<!--end::Card footer-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Deactivate Account-->
						<!--begin::Modals-->
						<!--begin::Modal - Two-factor authentication-->
						<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1"
							aria-hidden="true">
							<!--begin::Modal header-->
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<!--begin::Modal content-->
								<div class="modal-content">
									<!--begin::Modal header-->
									<div class="modal-header flex-stack">
										<!--begin::Title-->
										<h2>Choose An Authentication Method</h2>
										<!--end::Title-->
										<!--begin::Close-->
										<div class="btn btn-sm btn-icon btn-active-color-primary"
											data-bs-dismiss="modal">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
														transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1"
														transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Close-->
									</div>
									<!--begin::Modal header-->
									<!--begin::Modal body-->
									<div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
										<!--begin::Options-->
										<div data-kt-element="options">
											<!--begin::Notice-->
											<p class="text-muted fs-5 fw-bold mb-10">In addition to your username and
												password, you’ll have to enter a code (delivered via app or SMS) to log
												into your account.</p>
											<!--end::Notice-->
											<!--begin::Wrapper-->
											<div class="pb-10">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="auth_option" value="apps"
													checked="checked"
													id="kt_modal_two_factor_authentication_option_1" />
												<label
													class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
													for="kt_modal_two_factor_authentication_option_1">
													<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
													<span class="svg-icon svg-icon-4x me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
																fill="currentColor" />
															<path
																d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<span class="d-block fw-bold text-start">
														<span class="text-dark fw-bolder d-block fs-3">Authenticator
															Apps</span>
														<span class="text-muted fw-bold fs-6">Get codes from an app like
															Google Authenticator, Microsoft Authenticator, Authy or
															1Password.</span>
													</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="auth_option" value="sms"
													id="kt_modal_two_factor_authentication_option_2" />
												<label
													class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center"
													for="kt_modal_two_factor_authentication_option_2">
													<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
													<span class="svg-icon svg-icon-4x me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
																fill="currentColor" />
															<path
																d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<span class="d-block fw-bold text-start">
														<span class="text-dark fw-bolder d-block fs-3">SMS</span>
														<span class="text-muted fw-bold fs-6">We will send a code via
															SMS if you need to use your backup login method.</span>
													</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Options-->
											<!--begin::Action-->
											<button class="btn btn-primary w-100"
												data-kt-element="options-select">Continue</button>
											<!--end::Action-->
										</div>
										<!--end::Options-->
										<!--begin::Apps-->
										<div class="d-none" data-kt-element="apps">
											<!--begin::Heading-->
											<h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
											<!--end::Heading-->
											<!--begin::Description-->
											<div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app
												like
												<a href="https://support.google.com/accounts/answer/1066447?hl=en"
													target="_blank">Google Authenticator</a>,
												<a href="https://www.microsoft.com/en-us/account/authenticator"
													target="_blank">Microsoft Authenticator</a>,
												<a href="https://authy.com/download/" target="_blank">Authy</a>, or
												<a href="https://support.1password.com/one-time-passwords/"
													target="_blank">1Password</a>, scan the QR code. It will generate a
												6 digit code for you to enter below.
												<!--begin::QR code image-->
												<div class="pt-5 text-center">
													<img src="assets/media/misc/qr.png" alt="" class="mw-150px" />
												</div>
												<!--end::QR code image-->
											</div>
											<!--end::Description-->
											<!--begin::Notice-->
											<div
												class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="11" y="14" width="7" height="2" rx="1"
															transform="rotate(-90 11 14)" fill="currentColor" />
														<rect x="11" y="17" width="2" height="2" rx="1"
															transform="rotate(-90 11 17)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-bold">
														<div class="fs-6 text-gray-700">If you having trouble using the
															QR code, select manual entry on your app, and enter your
															username and the code:
															<div class="fw-bolder text-dark pt-2">
																KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div>
														</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--begin::Form-->
											<form data-kt-element="apps-form" class="form" action="#">
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<input type="text"
														class="form-control form-control-lg form-control-solid"
														placeholder="Enter authentication code" name="code" />
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex flex-center">
													<button type="reset" data-kt-element="apps-cancel"
														class="btn btn-light me-3">Cancel</button>
													<button type="submit" data-kt-element="apps-submit"
														class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span
																class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Options-->
										<!--begin::SMS-->
										<div class="d-none" data-kt-element="sms">
											<!--begin::Heading-->
											<h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number
											</h3>
											<!--end::Heading-->
											<!--begin::Notice-->
											<div class="text-muted fw-bold mb-10">Enter your mobile phone number with
												country code and we will send you a verification code upon request.
											</div>
											<!--end::Notice-->
											<!--begin::Form-->
											<form data-kt-element="sms-form" class="form" action="#">
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<input type="text"
														class="form-control form-control-lg form-control-solid"
														placeholder="Mobile number with country code..."
														name="mobile" />
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex flex-center">
													<button type="reset" data-kt-element="sms-cancel"
														class="btn btn-light me-3">Cancel</button>
													<button type="submit" data-kt-element="sms-submit"
														class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span
																class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::SMS-->
									</div>
									<!--begin::Modal body-->
								</div>
								<!--end::Modal content-->
							</div>
							<!--end::Modal header-->
						</div>
						<!--end::Modal - Two-factor authentication-->
						<!--end::Modals-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Container-->
				<!--begin::Footer-->
				<?php include '../components/footer.php';?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none rounded-0">
			<!--begin::Header-->
			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
						id="kt_activities_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body position-relative" id="kt_activities_body">
				<!--begin::Content-->
				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
					data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
					data-kt-scroll-offset="5px">
					<!--begin::Timeline items-->
					<div class="timeline">
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
												fill="currentColor" />
											<path
												d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile App”
										project:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Record-->
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
										<!--begin::Title-->
										<a href="../../demo18/dist/apps/projects/project.html"
											class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
											with customer</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A
												</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo18/dist/apps/projects/project.html"
											class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
									<!--begin::Record-->
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
										<!--begin::Title-->
										<a href="../../demo18/dist/apps/projects/project.html"
											class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
											Delivery Preparation</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-20.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B
												</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo18/dist/apps/projects/project.html"
											class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
												fill="currentColor" />
											<path
												d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n2">
								<!--begin::Timeline heading-->
								<div class="overflow-auto pe-3">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak
										human workshop</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="assets/media/avatars/300-1.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="mb-5 pe-3">
									<!--begin::Title-->
									<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New
										Incoming Project Files:</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="assets/media/avatars/300-23.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-bold">
												<!--begin::Desc-->
												<a href="../../demo18/dist/apps/projects/project.html"
													class="fs-6 text-hover-primary fw-bolder">Finance KPI App
													Guidelines</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">1.9mb</div>
												<!--end::Number-->
											</div>
											<!--begin::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="../../demo18/dist/apps/projects/project.html" class="w-30px me-3"
												src="assets/media/svg/files/doc.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-bold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing
													Results</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">18kb</div>
												<!--end::Number-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center">
											<!--begin::Icon-->
											<img alt="../../demo18/dist/apps/projects/project.html" class="w-30px me-3"
												src="assets/media/svg/files/css.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-bold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance
													Reports</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">20mb</div>
												<!--end::Number-->
											</div>
											<!--end::Icon-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
												fill="currentColor" />
											<path
												d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">Task
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin
										Dashboard project:
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
												fill="currentColor" />
											<path
												d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px"
													src="assets/media/stock/600x400/img-29.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px"
													src="assets/media/stock/600x400/img-31.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px"
													src="assets/media/stock/600x400/img-40.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">New case
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in
										Multi-platform Database Design project
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="overflow-auto pb-5">
										<!--begin::Wrapper-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
											<!--end::User-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
												fill="currentColor" />
											<path
												d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">You have received a new order:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="assets/media/avatars/300-4.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Notice-->
									<div
										class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
													d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
													fill="currentColor" />
												<path
													d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-bold">
												<h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!
												</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
													sure the data integrity is OK</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#"
												class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">New order
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow
										Planning &amp; Budget Estimation
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
					</div>
					<!--end::Timeline items-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
			<!--begin::Footer-->
			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="../../demo18/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View
					All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
								transform="rotate(-180 18 13)" fill="currentColor" />
							<path
								d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
								fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
			</div>
			<!--end::Footer-->
		</div>
	</div>
	<!--end::Activities drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-bold text-muted">Active</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Menu-->
					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
							data-kt-menu-placement="bottom-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>
						<!--begin::Menu 3-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
							data-kt-menu="true">
							<!--begin::Heading-->
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>
							<!--end::Heading-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
										title="Specify a contact email to send an invitation"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
								data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Create Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Invite Members</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
									title="Coming soon">Settings</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 3-->
					</div>
					<!--end::Menu-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
					data-kt-scroll-activate="true" data-kt-scroll-height="auto"
					data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
					data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">How likely are you to recommend our company to your
								friends and family ?</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
								been subscribed to a repository on GitHub.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Ok, Understood!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">You’ll receive notifications for all issues, pull
								requests!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">You can unwatch this repository immediately by clicking
								here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Most purchased Business courses during this sale!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
								goals. Food and drinks provided</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(template for out)-->
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text"></div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for out)-->
					<!--begin::Message(template for in)-->
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Right before vacation season we have the next Big Deal
								for you.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for in)-->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
					placeholder="Type a message"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-paperclip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-upload fs-3"></i>
						</button>
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--end::Drawers-->
	<!--end::Main-->
	<!--begin::Engage drawers-->
	<!--begin::Demos drawer-->
	<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_engage_demos_header">
				<h3 class="card-title fw-bolder text-gray-700">Explore</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
						id="kt_engage_demos_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_engage_demos_body">
				<!--begin::Content-->
				<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body"
					data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
					<!--begin::Wrapper-->
					<div class="mb-0">
						<!--begin::Heading-->
						<div class="mb-7">
							<div class="d-flex flex-stack">
								<h3 class="mb-0">Metronic Licenses</h3>
								<a href="https://themeforest.net/licenses/standard" class="fw-bold"
									target="_blank">License FAQs</a>
							</div>
						</div>
						<!--end::Heading-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
											data-bs-toggle="popover" data-bs-custom-class="popover-dark"
											data-bs-trigger="hover" data-bs-placement="top"
											data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
									</div>
									<div class="fs-7 text-muted">For single end product used by you or one client</div>
								</div>
								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-bold me-n1">$</span>
									<span class="text-dark fs-1 fw-bolder">39</span>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
											data-bs-toggle="popover" data-bs-custom-class="popover-dark"
											data-bs-trigger="hover" data-bs-placement="top"
											data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
									</div>
									<div class="fs-7 text-muted">For single SaaS app with paying users</div>
								</div>
								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-bold me-n1">$</span>
									<span class="text-dark fs-1 fw-bolder">969</span>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
									</div>
									<div class="fs-7 text-muted">Reach us for custom license offers.</div>
								</div>
								<div class="text-nowrap">
									<a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success"
										target="_blank">Contact Us</a>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::Purchase-->
						<a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
						<!--end::Purchase-->
						<!--begin::Demos-->
						<div class="mb-0">
							<h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
							<!--begin::Row-->
							<div class="row g-5">
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo1"
												class="btn btn-sm btn-success shadow">Demo 1</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo2"
												class="btn btn-sm btn-success shadow">Demo 2</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo3"
												class="btn btn-sm btn-success shadow">Demo 3</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo4"
												class="btn btn-sm btn-success shadow">Demo 4</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo5"
												class="btn btn-sm btn-success shadow">Demo 5</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo6"
												class="btn btn-sm btn-success shadow">Demo 6</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo7"
												class="btn btn-sm btn-success shadow">Demo 7</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo8"
												class="btn btn-sm btn-success shadow">Demo 8</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo9"
												class="btn btn-sm btn-success shadow">Demo 9</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo10.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo10"
												class="btn btn-sm btn-success shadow">Demo 10</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo11"
												class="btn btn-sm btn-success shadow">Demo 11</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo12.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo12"
												class="btn btn-sm btn-success shadow">Demo 12</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo13"
												class="btn btn-sm btn-success shadow">Demo 13</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo14.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo14"
												class="btn btn-sm btn-success shadow">Demo 14</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo15.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo15"
												class="btn btn-sm btn-success shadow">Demo 15</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo16.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo16"
												class="btn btn-sm btn-success shadow">Demo 16</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo17.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo17"
												class="btn btn-sm btn-success shadow">Demo 17</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-success rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo18.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo18"
												class="btn btn-sm btn-success shadow">Demo 18</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo19.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo19"
												class="btn btn-sm btn-success shadow">Demo 19</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo20.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo20"
												class="btn btn-sm btn-success shadow">Demo 20</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo21.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo21"
												class="btn btn-sm btn-success shadow">Demo 21</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo22.png" alt="demo"
												class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
											</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo23.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo23"
												class="btn btn-sm btn-success shadow">Demo 23</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div
										class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo24.png" alt="demo"
												class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
											</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Demos-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Demos drawer-->
	<!--begin::Help drawer-->
	<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true"
		data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}"
		data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_help_header">
				<h5 class="card-title fw-bold text-gray-600">Learn &amp; Get Inspired</h5>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_help_body">
				<!--begin::Content-->
				<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
					data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
					<!--begin::Support-->
					<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
						<!--begin::Heading-->
						<h2 class="fw-bolder mb-5">Support at
							<a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
						</h2>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="fs-5 fw-bold mb-5">
							<span class="text-gray-500">Join our developers community to find answer to your question
								and help others.</span>
							<a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
						</div>
						<!--end::Description-->
						<!--begin::Link-->
						<a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
							Support</a>
						<!--end::Link-->
					</div>
					<!--end::Support-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
							<span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
										fill="currentColor" />
									<path
										d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo18/dist/documentation/getting-started.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Documentation &amp;
									Videos</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">From guides and video tutorials, to live
									demos and code examples to get started.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
							<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
										fill="currentColor" />
									<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo18/dist/documentation/base/utilities.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Plugins &amp;
									Components</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Check out our 300+ in-house components and
									customized 3rd-party plugins.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
							<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
							<span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
										fill="currentColor" />
									<path
										d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="https://preview.keenthemes.com/metronic8/demo18/layout-builder.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Layout Builder</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Build your layout, preview it and export
									the HTML for server side integration.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
							<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
							<span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
										fill="currentColor" />
									<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
										fill="currentColor" />
									<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="https://devs.keenthemes.com/metronic"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Metronic
									Downloads</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Download your prefered framework and demo
									with one click.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
							<!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
							<span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo18/dist/documentation/getting-started/changelog.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">What's New</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Latest features and improvements added with
									our users feedback in mind.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Help drawer-->
	<!--end::Engage drawers-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
					fill="currentColor" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Modal - Create Project-->
	<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-fullscreen p-9">
			<!--begin::Modal content-->
			<div class="modal-content modal-rounded">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Create Project</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Nav-->
							<div class="stepper-nav justify-content-center py-2">
								<!--begin::Step 1-->
								<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Project Type</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Project Settings</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Budget</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Build A Team</h3>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Set First Target</h3>
								</div>
								<!--end::Step 5-->
								<!--begin::Step 6-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Upload Files</h3>
								</div>
								<!--end::Step 6-->
								<!--begin::Step 7-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
								<!--end::Step 7-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
								id="kt_modal_create_project_form" method="post">
								<!--begin::Type-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-7 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Project Type</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check out
												<a href="#" class="link-primary fw-bolder">FAQ Page</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-15" data-kt-buttons="true">
											<!--begin::Option-->
											<label
												class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">
												<!--begin::Input-->
												<input class="btn-check" type="radio" checked="checked"
													name="project_type" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
													<span class="svg-icon svg-icon-3hx">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
																fill="currentColor" />
															<path
																d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="ms-4">
														<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Personal
															Project</span>
														<span class="fw-bold fs-4 text-muted">If you need more info,
															please check it out</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label
												class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
												<!--begin::Input-->
												<input class="btn-check" type="radio" name="project_type" value="2" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
													<span class="svg-icon svg-icon-3hx">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
																fill="currentColor" />
															<path
																d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="ms-4">
														<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Team
															Project</span>
														<span class="fw-bold fs-4 text-muted">Create corporate account
															to manage users</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="type-next">
												<span class="indicator-label">Project Settings</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Type-->
								<!--begin::Settings-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Project Settings</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_project_settings_logo">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
													<span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
																fill="currentColor" />
															<path
																d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
																fill="currentColor" />
															<path
																d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
																fill="currentColor" />
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bolder text-gray-900 mb-1">Drop files here
															or click to upload.</h3>
														<span class="fw-bold fs-4 text-muted">Upload up to 10
															files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold mb-2">Customer</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select class="form-select form-select-solid" data-control="select2"
												data-hide-search="true" data-placeholder="Select..."
												name="settings_customer">
												<option></option>
												<option value="1">Keenthemes</option>
												<option value="2">CRM App</option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Project Name</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify project name"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter Project Name" value="StockPro Mobile App"
												name="settings_name" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold mb-2">Project Description</label>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea class="form-control form-control-solid" rows="3"
												placeholder="Enter Project Description"
												name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold mb-2">Release Date</label>
											<!--end::Label-->
											<!--begin::Wrapper-->
											<div class="position-relative d-flex align-items-center">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
												<span class="svg-icon svg-icon-2 position-absolute mx-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
															fill="currentColor" />
														<path
															d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
															fill="currentColor" />
														<path
															d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Input-->
												<input class="form-control form-control-solid ps-12"
													placeholder="Pick date range" name="settings_release_date" />
												<!--end::Input-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="required fs-6 fw-bold">Notifications</label>
													<div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or
														Email</div>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="email" name="settings_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Email</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="phone" checked="checked"
															name="settings_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Phone</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--begin::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="settings-previous">Project Type</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="settings-next">
												<span class="indicator-label">Budget</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Settings-->
								<!--begin::Budget-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Budget</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold mb-2">
												<span class="required">Setup Budget</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
													data-bs-trigger="hover" data-bs-html="true"
													data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
											</label>
											<!--end::Label-->
											<!--begin::Dialer-->
											<div class="position-relative w-lg-250px"
												id="kt_modal_create_project_budget_setup" data-kt-dialer="true"
												data-kt-dialer-min="50" data-kt-dialer-max="50000"
												data-kt-dialer-step="100" data-kt-dialer-prefix="$"
												data-kt-dialer-decimals="2">
												<!--begin::Decrease control-->
												<button type="button"
													class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
													data-kt-dialer-control="decrease">
													<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
																rx="10" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Decrease control-->
												<!--begin::Input control-->
												<input type="text"
													class="form-control form-control-solid border-0 ps-12"
													data-kt-dialer-control="input" placeholder="Amount"
													name="budget_setup" readonly="readonly" value="$50" />
												<!--end::Input control-->
												<!--begin::Increase control-->
												<button type="button"
													class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
													data-kt-dialer-control="increase">
													<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
																rx="10" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
																transform="rotate(-90 10.8891 17.8033)"
																fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Increase control-->
											</div>
											<!--end::Dialer-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Budget Usage</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row g-9" data-kt-buttons="true"
												data-kt-buttons-target="[data-kt-button='true']">
												<!--begin::Col-->
												<div class="col-md-6 col-lg-12 col-xxl-6">
													<!--begin::Option-->
													<label
														class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6"
														data-kt-button="true">
														<!--begin::Radio-->
														<span
															class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
																name="budget_usage" value="1" checked="checked" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span
																class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Precise
																Usage</span>
															<span class="fw-bold fs-7 text-gray-600">Withdraw money to
																your bank account per transaction under $50,000
																budget</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-lg-12 col-xxl-6">
													<!--begin::Option-->
													<label
														class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
														data-kt-button="true">
														<!--begin::Radio-->
														<span
															class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
																name="budget_usage" value="2" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span
																class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Extreme
																Usage</span>
															<span class="fw-bold fs-7 text-gray-600">Withdraw money to
																your bank account per transaction under $50,000
																budget</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Allow Changes in Budget</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please
														check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="budget_allow" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="budget-previous">Project Settings</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="budget-next">
												<span class="indicator-label">Build Team</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Budget-->
								<!--begin::Team-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Build a Team</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Invite Teammates</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Add project memnbers by name or email.."
												name="invite_teammates" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<div class="fs-6 fw-bold mb-2">Team Members</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
																Smith</a>
															<div class="fw-bold text-muted">smith@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-bold">M</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
																Macy</a>
															<div class="fw-bold text-muted">melody@altbox.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
																Smith</a>
															<div class="fw-bold text-muted">max@kt.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
																Bean</a>
															<div class="fw-bold text-muted">sean@dellito.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
																Cox</a>
															<div class="fw-bold text-muted">brian@exchange.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-warning text-warning fw-bold">C</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
																Collins</a>
															<div class="fw-bold text-muted">mik@pex.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
																Mitcham</a>
															<div class="fw-bold text-muted">f.mit@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-bold">O</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
																Wild</a>
															<div class="fw-bold text-muted">olivia@corpmail.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-primary text-primary fw-bold">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
																Owen</a>
															<div class="fw-bold text-muted">owen.neil@gmail.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
																Wilson</a>
															<div class="fw-bold text-muted">dam@consilting.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-bold">E</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
																Bold</a>
															<div class="fw-bold text-muted">emma@intenso.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
																Crown</a>
															<div class="fw-bold text-muted">ana.cf@limtel.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-info text-info fw-bold">A</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
																Doe</a>
															<div class="fw-bold text-muted">robert@benko.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
																Miller</a>
															<div class="fw-bold text-muted">miller@mapple.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-success text-success fw-bold">L</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
																Kunic</a>
															<div class="fw-bold text-muted">lucy.m@fentech.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
																Wilder</a>
															<div class="fw-bold text-muted">ethan@loop.com.au</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
																Cox</a>
															<div class="fw-bold text-muted">brian@exchange.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
										</div>
										<!--end::Input group-->
										<!--begin::Notice-->
										<div class="d-flex flex-stack mb-15">
											<!--begin::Label-->
											<div class="me-5 fw-bold">
												<label class="fs-6">Adding Users by Team Members</label>
												<div class="fs-7 text-muted">If you need more info, please check budget
													planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value=""
													checked="checked" />
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Notice-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="team-previous">Budget</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="team-next">
												<span class="indicator-label">Set Target</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Team-->
								<!--begin::Targets-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Set First Target</h1>
											<!--end::Title-->
											<!--begin::Title-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="fs-6 fw-bold mb-2">Target Title</label>
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter Target Title" name="Project Launch" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold mb-2">Assign</label>
												<select class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Select a Team Member"
													name="target_assign">
													<option></option>
													<option value="1">Karina Clark</option>
													<option value="2" selected="selected">Robert Doe</option>
													<option value="3">Niel Owen</option>
													<option value="4">Olivia Wild</option>
													<option value="5">Sean Bean</option>
												</select>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold mb-2">Due Date</label>
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
																fill="currentColor" />
															<path
																d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
																fill="currentColor" />
															<path
																d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12"
														placeholder="Pick date range" name="target_due_date" />
													<!--end::Datepicker-->
												</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="fs-6 fw-bold mb-2">Target Details</label>
											<textarea class="form-control form-control-solid" rows="2"
												name="target_details"
												placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="required fs-6 fw-bold mb-2">Tags</label>
											<input class="form-control form-control-solid" value="Important, Urgent"
												name="target_tags" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Allow Changes in Budget</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please
														check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="target_allow" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Notifications</label>
													<div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or
														Email</div>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="email" name="target_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Email</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="phone" checked="checked"
															name="target_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Phone</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="targets-previous">Build a Team</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="targets-next">
												<span class="indicator-label">Upload Files</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Targets-->
								<!--begin::Files-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Upload Files</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_project_files_upload">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
													<span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
																fill="currentColor" />
															<path
																d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
																fill="currentColor" />
															<path
																d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
																fill="currentColor" />
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bolder text-gray-900 mb-1">Drop files here
															or click to upload.</h3>
														<span class="fw-bold fs-4 text-muted">Upload up to 10
															files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Uploaded File</label>
											<!--End::Label-->
											<!--begin::Files-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/pdf.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Avionica
																Technical Requirements</a>
															<div class="fw-bold text-muted">230kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/doc.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">9
																Degree CURD draftplan</a>
															<div class="fw-bold text-muted">3.6mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/css.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">User
																CRUD Styles</a>
															<div class="fw-bold text-muted">85kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/ai.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Design
																Initial Logo</a>
															<div class="fw-bold text-muted">40kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/tif.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Tower
																Hill Bilboard</a>
															<div class="fw-bold text-muted">27mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
											</div>
											<!--end::Files-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Allow Changes in Budget</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please
														check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="target_allow" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="files-previous">Set First Target</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="files-next">
												<span class="indicator-label">Complete</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Files-->
								<!--begin::Complete-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12 text-center">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Project Created!</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check how
												to create project</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-center pb-20">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="complete-start">Create New Project</button>
											<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
												title="Coming Soon">View Project</a>
										</div>
										<!--end::Actions-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt=""
												class="mww-100 mh-350px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Complete-->
							</form>
							<!--end::Form-->
						</div>
						<!--begin::Container-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Create Project-->
	<!--begin::Modal - Create App-->
	<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-900px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Create App</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-lg-10 px-lg-10">
					<!--begin::Stepper-->
					<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
						id="kt_modal_create_app_stepper">
						<!--begin::Aside-->
						<div
							class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
							<!--begin::Nav-->
							<div class="stepper-nav ps-lg-10">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Details</h3>
										<div class="stepper-desc">Name your App</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--begin::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Frameworks</h3>
										<div class="stepper-desc">Define your app framework</div>
									</div>
									<!--begin::Label-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Database</h3>
										<div class="stepper-desc">Select the app database type</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Billing</h3>
										<div class="stepper-desc">Provide payment details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completed</h3>
										<div class="stepper-desc">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--begin::Aside-->
						<!--begin::Content-->
						<div class="flex-row-fluid py-lg-5 px-lg-15">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-2">
												<span class="required">App Name</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify your unique app name"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid"
												name="name" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-4">
												<span class="required">Category</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Select your app category"></i>
											</label>
											<!--end::Label-->
											<!--begin:Options-->
											<div class="fv-row">
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3"
																			d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
																			fill="currentColor" />
																		<path
																			d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Quick Online Courses</span>
															<span class="fs-7 text-muted">Creating a clear text
																structure is just one SEO</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category"
															value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2"
																			fill="currentColor" />
																		<rect opacity="0.3" x="13" y="2" width="9"
																			height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="13" y="13" width="9"
																			height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="2" y="13" width="9"
																			height="9" rx="2" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Face to Face Discussions</span>
															<span class="fs-7 text-muted">Creating a clear text
																structure is just one aspect</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category"
															value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3"
																			d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
																			fill="currentColor" />
																		<path
																			d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Full Intro Training</span>
															<span class="fs-7 text-muted">Creating a clear text
																structure copywriting</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category"
															value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end:Options-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-4">
												<span class="required">Select Framework</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify your apps framework"></i>
											</label>
											<!--end::Label-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-warning">
															<i class="fab fa-html5 text-warning fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">HTML5</span>
														<span class="fs-7 text-muted">Base Web Projec</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" checked="checked"
														name="framework" value="1" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="fab fa-react text-success fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">ReactJS</span>
														<span class="fs-7 text-muted">Robust and flexible app
															framework</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework"
														value="2" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<i class="fab fa-angular text-danger fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Angular</span>
														<span class="fs-7 text-muted">Powerful data mangement</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework"
														value="3" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<i class="fab fa-vuejs text-primary fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Vue</span>
														<span class="fs-7 text-muted">Lightweight and responsive
															framework</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework"
														value="4" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="required fs-5 fw-bold mb-2">Database Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid"
												name="dbname" placeholder="" value="master_db" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-4">
												<span class="required">Select Database Engine</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Select your app database engine"></i>
											</label>
											<!--end::Label-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="fas fa-database text-success fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">MySQL</span>
														<span class="fs-7 text-muted">Basic MySQL database</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine"
														checked="checked" value="1" />
												</span>
												<!--end::Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<i class="fab fa-google text-danger fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Firebase</span>
														<span class="fs-7 text-muted">Google based app data
															management</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine"
														value="2" />
												</span>
												<!--end::Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-warning">
															<i class="fab fa-amazon text-warning fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">DynamoDB</span>
														<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine"
														value="3" />
												</span>
												<!--end::Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Name On Card</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify a card holder's name"></i>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder=""
												name="card_name" value="Max Doe" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid"
													placeholder="Enter card number" name="card_number"
													value="4111 1111 1111 1111" />
												<!--end::Input-->
												<!--begin::Card logos-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-5">
													<img src="assets/media/svg/card-logos/visa.svg" alt=""
														class="h-25px" />
													<img src="assets/media/svg/card-logos/mastercard.svg" alt=""
														class="h-25px" />
													<img src="assets/media/svg/card-logos/american-express.svg" alt=""
														class="h-25px" />
												</div>
												<!--end::Card logos-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-10">
											<!--begin::Col-->
											<div class="col-md-8 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Expiration
													Date</label>
												<!--end::Label-->
												<!--begin::Row-->
												<div class="row fv-row">
													<!--begin::Col-->
													<div class="col-6">
														<select name="card_expiry_month"
															class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Month">
															<option></option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
														</select>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<select name="card_expiry_year"
															class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Year">
															<option></option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
															<option value="2025">2025</option>
															<option value="2026">2026</option>
															<option value="2027">2027</option>
															<option value="2028">2028</option>
															<option value="2029">2029</option>
															<option value="2030">2030</option>
															<option value="2031">2031</option>
															<option value="2032">2032</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">CVV</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7"
														data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid"
														minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
													<!--end::Input-->
													<!--begin::CVV icon-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-3">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
														<span class="svg-icon svg-icon-2hx">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path d="M22 7H2V11H22V7Z" fill="currentColor" />
																<path opacity="0.3"
																	d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
																	fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::CVV icon-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="fs-6 fw-bold form-label">Save Card for further
													billing?</label>
												<div class="fs-7 fw-bold text-muted">If you need more info, please check
													budget planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1"
													checked="checked" />
												<span class="form-check-label fw-bold text-muted">Save Card</span>
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<div class="w-100 text-center">
										<!--begin::Heading-->
										<h1 class="fw-bolder text-dark mb-3">Release!</h1>
										<!--end::Heading-->
										<!--begin::Description-->
										<div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.
										</div>
										<!--end::Description-->
										<!--begin::Illustration-->
										<div class="text-center px-4 py-15">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt=""
												class="mw-100 mh-300px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-10">
									<!--begin::Wrapper-->
									<div class="me-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3"
											data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
														fill="currentColor" />
													<path
														d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back
										</button>
									</div>
									<!--end::Wrapper-->
									<!--begin::Wrapper-->
									<div>
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
															transform="rotate(-180 18 13)" fill="currentColor" />
														<path
															d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
														transform="rotate(-180 18 13)" fill="currentColor" />
													<path
														d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Create App-->
	<!--begin::Modal - Upgrade plan-->
	<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-xl">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<h1 class="mb-3">Upgrade a Plan</h1>
						<div class="text-muted fw-bold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
						</div>
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
								data-kt-plan="month">Monthly</button>
							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
								data-kt-plan="annual">Annual</button>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan"
													checked="checked" value="startup" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup
												</h2>
												<div class="fw-bold opacity-50">Best for startups</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="39"
												data-kt-plan-price-annual="399">39</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan"
													value="advanced" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced
												</h2>
												<div class="fw-bold opacity-50">Best for 100+ team size</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="339"
												data-kt-plan-price-annual="3399">339</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan"
													value="enterprise" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
													Enterprise
													<span class="badge badge-light-success ms-2 fs-7">Most
														popular</span>
												</h2>
												<div class="fw-bold opacity-50">Best value for 1000+ team</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="999"
												data-kt-plan-price-annual="9999">999</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div
										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan"
													value="custom" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom
												</h2>
												<div class="fw-bold opacity-50">Requet a custom license</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<a href="#" class="btn btn-sm btn-primary">Contact Us</a>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
								</div>
								<!--end::Tabs-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6">
								<!--begin::Tab content-->
								<div class="tab-content rounded h-100 bg-light p-10">
									<!--begin::Tab Pane-->
									<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-bold">Optimal for 10+ team size and new startup
											</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
													Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-bold">Optimal for 100+ team size and grown company
											</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
													Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
													Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
					<!--begin::Actions-->
					<div class="d-flex flex-center flex-row-fluid pt-12">
						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Upgrade Plan</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Upgrade plan-->
	<!--begin::Modal - Offer A Deal-->
	<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-1000px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header py-7 d-flex justify-content-between">
					<!--begin::Modal title-->
					<h2>Offer a Deal</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
						<!--begin::Nav-->
						<div class="stepper-nav justify-content-center py-2">
							<!--begin::Step 1-->
							<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Deal Type</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Deal Details</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Finance Settings</h3>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Completed</h3>
							</div>
							<!--end::Step 4-->
						</div>
						<!--end::Nav-->
						<!--begin::Form-->
						<form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate"
							id="kt_modal_offer_a_deal_form">
							<!--begin::Type-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Deal Type</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-bold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-15" data-kt-buttons="true">
										<!--begin::Option-->
										<label
											class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">
											<!--begin::Input-->
											<input class="btn-check" type="radio" checked="checked" name="offer_type"
												value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="d-flex">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
												<span class="svg-icon svg-icon-3hx">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
															fill="currentColor" />
														<path
															d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="ms-4">
													<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Personal
														Deal</span>
													<span class="fw-bold fs-4 text-muted">If you need more info, please
														check it out</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<label
											class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
											<!--begin::Input-->
											<input class="btn-check" type="radio" name="offer_type" value="2" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="d-flex">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-3hx">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect x="2" y="2" width="9" height="9" rx="2"
															fill="currentColor" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
															fill="currentColor" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
															fill="currentColor" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="ms-4">
													<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Corporate
														Deal</span>
													<span class="fw-bold fs-4 text-muted">Create corporate account to
														manage users</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-element="type-next">
											<span class="indicator-label">Offer Details</span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Type-->
							<!--begin::Details-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Deal Details</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-bold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="required fs-6 fw-bold mb-2">Customer</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-solid" data-control="select2"
											data-placeholder="Select an option" name="details_customer">
											<option></option>
											<option value="1" selected="selected">Keenthemes</option>
											<option value="2">CRM App</option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="required fs-6 fw-bold mb-2">Deal Title</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid"
											placeholder="Enter Deal Title" name="details_title"
											value="Marketing Campaign" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="fs-6 fw-bold mb-2">Deal Description</label>
										<!--end::Label-->
										<!--begin::Label-->
										<textarea class="form-control form-control-solid" rows="3"
											placeholder="Enter Deal Description"
											name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
										<!--end::Label-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<label class="required fs-6 fw-bold mb-2">Activation Date</label>
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2 position-absolute mx-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
														d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
														fill="currentColor" />
													<path
														d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
														fill="currentColor" />
													<path
														d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid ps-12"
												placeholder="Pick date range" name="details_activation_date" />
											<!--end::Datepicker-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-15">
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="required fs-6 fw-bold">Notifications</label>
												<div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or
													Email</div>
											</div>
											<!--end::Label-->
											<!--begin::Checkboxes-->
											<div class="d-flex">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-10">
													<!--begin::Input-->
													<input class="form-check-input h-20px w-20px" type="checkbox"
														value="email" name="details_notifications[]" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold">Email</span>
													<!--end::Label-->
												</label>
												<!--end::Checkbox-->
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input h-20px w-20px" type="checkbox"
														value="phone" checked="checked"
														name="details_notifications[]" />
													<!--end::Input-->
													<!--begin::Label-->
													<span class="form-check-label fw-bold">Phone</span>
													<!--end::Label-->
												</label>
												<!--end::Checkbox-->
											</div>
											<!--end::Checkboxes-->
										</div>
										<!--begin::Wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<button type="button" class="btn btn-lg btn-light me-3"
											data-kt-element="details-previous">Deal Type</button>
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-element="details-next">
											<span class="indicator-label">Financing</span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Details-->
							<!--begin::Budget-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Finance</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-bold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Setup Budget</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
												data-bs-trigger="hover" data-bs-html="true"
												data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
										</label>
										<!--end::Label-->
										<!--begin::Dialer-->
										<div class="position-relative w-lg-250px" id="kt_modal_finance_setup"
											data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000"
											data-kt-dialer-step="100" data-kt-dialer-prefix="$"
											data-kt-dialer-decimals="2">
											<!--begin::Decrease control-->
											<button type="button"
												class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
												data-kt-dialer-control="decrease">
												<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</button>
											<!--end::Decrease control-->
											<!--begin::Input control-->
											<input type="text" class="form-control form-control-solid border-0 ps-12"
												data-kt-dialer-control="input" placeholder="Amount" name="finance_setup"
												readonly="readonly" value="$50" />
											<!--end::Input control-->
											<!--begin::Increase control-->
											<button type="button"
												class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
												data-kt-dialer-control="increase">
												<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
															transform="rotate(-90 10.8891 17.8033)"
															fill="currentColor" />
														<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</button>
											<!--end::Increase control-->
										</div>
										<!--end::Dialer-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="fs-6 fw-bold mb-2">Budget Usage</label>
										<!--end::Label-->
										<!--begin::Row-->
										<div class="row g-9" data-kt-buttons="true"
											data-kt-buttons-target="[data-kt-button='true']">
											<!--begin::Col-->
											<div class="col-md-6 col-lg-12 col-xxl-6">
												<!--begin::Option-->
												<label
													class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6"
													data-kt-button="true">
													<!--begin::Radio-->
													<span
														class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio"
															name="finance_usage" value="1" checked="checked" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Precise
															Usage</span>
														<span class="fw-bold fs-7 text-gray-600">Withdraw money to your
															bank account per transaction under $50,000 budget</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 col-lg-12 col-xxl-6">
												<!--begin::Option-->
												<label
													class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
													data-kt-button="true">
													<!--begin::Radio-->
													<span
														class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio"
															name="finance_usage" value="2" />
													</span>
													<!--end::Radio-->
													<!--begin::Info-->
													<span class="ms-5">
														<span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Extreme
															Usage</span>
														<span class="fw-bold fs-7 text-gray-600">Withdraw money to your
															bank account per transaction under $50,000 budget</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-15">
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="fs-6 fw-bold">Allow Changes in Budget</label>
												<div class="fs-7 fw-bold text-muted">If you need more info, please check
													budget planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1"
													name="finance_allow" checked="checked" />
												<span class="form-check-label fw-bold text-muted">Allowed</span>
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<button type="button" class="btn btn-lg btn-light me-3"
											data-kt-element="finance-previous">Project Settings</button>
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-element="finance-next">
											<span class="indicator-label">Build Team</span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Budget-->
							<!--begin::Complete-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-13">
										<!--begin::Title-->
										<h2 class="mb-3">Deal Created!</h2>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-bold fs-5">If you need more info, please check out
											<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-center pb-20">
										<button type="button" class="btn btn-lg btn-light me-3"
											data-kt-element="complete-start">Create New Deal</button>
										<a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
											title="Coming Soon">View Deal</a>
									</div>
									<!--end::Actions-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img src="assets/media/illustrations/sketchy-1/20.png" alt=""
											class="mw-100 mh-300px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Complete-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--begin::Modal body-->
			</div>
		</div>
	</div>
	<!--end::Modal - Offer A Deal-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
						data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span
								class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
										transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path
										d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15"
								name="search" value="" placeholder="Search by username, full name or email..."
								data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
								data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span
								class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
								data-kt-search-element="clear">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-bold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='0']"
													value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
													Smith</a>
												<div class="fw-bold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='1']"
													value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
													Macy</a>
												<div class="fw-bold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='2']"
													value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
													Smith</a>
												<div class="fw-bold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='3']"
													value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
													Bean</a>
												<div class="fw-bold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='4']"
													value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
													Cox</a>
												<div class="fw-bold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='5']"
													value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-warning text-warning fw-bold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-bold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='6']"
													value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
													Mitcham</a>
												<div class="fw-bold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='7']"
													value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
													Wild</a>
												<div class="fw-bold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='8']"
													value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-primary text-primary fw-bold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
													Owen</a>
												<div class="fw-bold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='9']"
													value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
													Wilson</a>
												<div class="fw-bold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='10']"
													value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
													Bold</a>
												<div class="fw-bold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='11']"
													value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
													Crown</a>
												<div class="fw-bold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='12']"
													value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-bold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
													Doe</a>
												<div class="fw-bold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='13']"
													value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
													Miller</a>
												<div class="fw-bold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='14']"
													value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-success text-success fw-bold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
													Kunic</a>
												<div class="fw-bold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='15']"
													value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
													Wilder</a>
												<div class="fw-bold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='16']"
													value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
													Bean</a>
												<div class="fw-bold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
										class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
										Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-bold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="assets/media/illustrations/sketchy-1/1.png" alt=""
										class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-bold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bolder w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite
						Gmail Contacts
					</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3"
						placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-bold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
											Smith</a>
										<div class="fw-bold text-muted">smith@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
											Macy</a>
										<div class="fw-bold text-muted">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
											Smith</a>
										<div class="fw-bold text-muted">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
											Bean</a>
										<div class="fw-bold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
											Cox</a>
										<div class="fw-bold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
											Collins</a>
										<div class="fw-bold text-muted">mik@pex.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
											Mitcham</a>
										<div class="fw-bold text-muted">f.mit@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
											Wild</a>
										<div class="fw-bold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
											Owen</a>
										<div class="fw-bold text-muted">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
											Wilson</a>
										<div class="fw-bold text-muted">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
											Bold</a>
										<div class="fw-bold text-muted">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
											Crown</a>
										<div class="fw-bold text-muted">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-bold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
											Doe</a>
										<div class="fw-bold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
											Miller</a>
										<div class="fw-bold text-muted">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-bold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
											Kunic</a>
										<div class="fw-bold text-muted">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
											Wilder</a>
										<div class="fw-bold text-muted">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
											Cox</a>
										<div class="fw-bold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-bold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-bold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/account/settings/signin-methods.js"></script>
	<script src="assets/js/custom/account/settings/profile-details.js"></script>
	<script src="assets/js/custom/account/settings/deactivate-account.js"></script>
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
	<script src="assets/js/custom/utilities/modals/create-app.js"></script>
	<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
	<script src="assets/js/custom/utilities/modals/two-factor-authentication.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>