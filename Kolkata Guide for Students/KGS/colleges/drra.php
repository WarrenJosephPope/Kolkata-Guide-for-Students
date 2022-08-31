<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide |  Dr. R. Ahmed Dental College and Hospital</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/colleges.css"/>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <script src="../Scripts/select.js"></script>
	    <script src="../Scripts/rem_wm.js"></script>
		<?php include '../PHP/header.php'?>
		<div id="college_info">
		    <img class="bg" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGRgXGRgXFxgdHRcbHRgZFxgYHx4dHSggGBolHRoYITEhJSkrLi4uGx8zODMtNygtLisBCgoKDg0OGxAQGy0lICYtLS0tLS01LS0tLS0tLS0tLS0tLS0uLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAIMBfwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAECBwj/xABIEAACAQIEAwUEBQgHCAMBAAABAhEAAwQSITEFQVEGEyJhcTKBkdEUUqGxwRUjQlNikqLwFiQzk7LS4QdDVHKCo+LxF2PCc//EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACoRAAICAAYCAgEDBQAAAAAAAAABAhEDEhMhMWFBUQQiMhRxgUKRobHR/9oADAMBAAIRAxEAPwDzS3iY0I06f67xR/CcU3eKRaNyIMCZ3G0ecUntXSdh5VauxnCXuMSc6qZVXUwUYQQeUjr76IRZzypclnx+FXEW+7N2/azNORzI39kEjUTyJnbSq9xThQw6iHmZzCN42I6HWKsnE8YFUpdxCOV3BUMNNvZykN6kz5V5818rdLK2cElQTKyOUDl6RW+aMZJsxyycWkZisWLZByeIjnG3XQ6UkuWzJPOdfLnTW7cDA5us6A9N551LxHE59SDG0gQYGi77+nnWeLiZntwbYUaXYmuHQH3HT0o7D4A6MJaZMLM+mnXpv6VilWnwx0kyffHP5024XYchlt3Mumu/2HltqN6wbNbS5F9trlmWIzKdD5eXONf51piuKVrYbUEkiCByiAfIgx5QecURbwvJiCdj3kxziY9+o867xoAAN2x4QCM9rYCZJ5qNSTsPurlk4N9kOMWBXE7xcpZlI12kE/fPvqO9wNvaRsxAmAIk+h8vvimIdWIFobgw0oQOYMHUnyPSg7tu8Gh4AZsocBYnlrqNNNDNVCUlsmOLa2BrvB7jOpCECFgEqP0QSNT1mrhYwRgARoIiR/JpJg8e5usA4gsdBGgk7RuPWDVotQ4AnXrXd8bGnBu6r2c/ykpNIX8Rw3eZLUbXEz5d4SS32gVX+I9n3FweB2QforlGUfUkv7XUjnzJq08XLK0rd7sZbr5iR4fCxB1PihnU+vrVePEcUWA71kULm1ZSxXkYB8TnlEDnoBNZp3uju2oETgt4tLeJgJVNlVtlWASAAJOUHcAE6mtWeCX3IF2PEQvtZoM+HRZRR6edF2uIXWD5nuW0GUF2dyw3gCd2aCYUDbcCa64LjXNxYuXnGZQ2Z4gSHDACd8jKdTofPR7gGdqeFX7rW2tH82qQBnAOYu5YgTqIK69Z86EudmZXMucXANVGWC2okTAg9NBv1ontRiFF8DMVOVA35q2wUZQQIdSSTJY6wJ2mQF5xlw+Du1gAL3gt22IG6tOQIRBAiBpEEHWhWBpOz1wEsqOrDUJ4CG01X2vsPx2nu/wpkvuzW3ABcCcpGkhdj5CuMK18vDMsFwveDudGnQ6CSD5iY1GtF2Lly5iXzOpUtcIUZNJJA21501YnwXdbNJuOYM3bmGCg+FhmIgxLKeZHKrIqUq4vZZb1gpEyNSF0AXMAcwMa7mu/5nETzvg/lIr1rh1xI8JA5IBb8I85J8R66/hUV/h11zqo8I0TwjWRpp7zE+VSrir5YZSI8U3GtpLc2bRZHkBrrzNRJjSWZU8MLq5S2CokZnjIYkHLEnRo1JFcG56OxFheF3hcUXR4VZSfEvhymdApgdNOpp5x7hd25eLW/Y0El11I0I1Ow8/PrS7gFycQgQlyHUEd3bQFSQobRSWyuUMacjyNP+P4wpfIa/dQZtFRm1BJJby8RI57eQpDEycGviQjZZ9pAwhiDppOX8PurhuAXZ0Vgd8pyQTzA8f2UbjeNXFcIty8w5N3rgkE7gAiSDI1OsEacor/ABfGBtblxlAEkHVQYhhOx29rfY09xbG/yS1tw5VgsKNchiQoEw01b+ErOHsn/wCu2f4FoThl+7cN1LjZwtuyc2YwZ7skgTA3PL7daYdnx/VbH/8AK3/gArs+Jyzh+bwiS7YJKBc2mU6DTWeo862MLcj9Mk67afdt9ta4tfuJctZWkE251AiO7kRGu5GvSoTfvbK2xiS+/U6ggc4+NczuzsXCCPoVzaXJ8xp9g+yhLvCbgaWZnEqdBtzOwk/HnFZ3xPhh4IIzSRy1jmo38RHnpXAugMMhY6baw3vO/SfPWh3Q9rJ8Xwy4WLC4InZo+Uj7aifBtAm77swM+h6gjejeKYRMxzHK2hEHLJKpmO8bAeeooYKoAAUnXcSBMb77HzJmKFdCdEF7Bnnc0I08a+4+nxqS5hPY1Viynw5wSZkDKOc6bVvEA+HwjfmV0PvEaj+RSXjytaxmHYPbhLzKdUUqM1u4AJ8X+8JEciKTsex6J2NuThUB3UsP4iR9hFP1Wq/2SEd/bmct0n3HQf4asQFDZlGO5HdXT3j76kiubqyDW1OlItJWYy1TO0mE/P5lBmNQD6ax6irmRSjtDhy1hyphgJB9DPX13poT5K1d4a8aB+g1O31q4ucOfo4PQlqma5cKAqwlgOuy6TvuSD7vWoHuvAJGaejDQDbpJ99VuPY8JwuGzblq9R4QiJhbaBwrRJJZlgtLakb6Ec+VedcFbM6223YwCRGkx92tel8TxWFjJfZFB5M0ZgDz6iY02rdRSWxySbb3Kf2kvYdhktO1xx4nuKNDBgAEnYSdiZkSSdaqNq4onMs9J215z+NehcZxmEGHK4e9aVh9UjMQSSwkHYztr6VQb+HBYQ4O2o5etc+JhuzWD2CAIAyHcbdJ0PnHyoeziXthgVDLEjNy+fpXXELY3tsrGQ0gwdNhHKN9K19PfL4obbXTQgRuKzlFxdMtbrYj7xS2ZIA3ggQDz30IrL9vwhjqPI/f0NSreViFyhRJPh0MmPKOW3wit4yyFAW3qIEtqCzbkwfZE6ADpJ3pZGyyQcWuZZBzqORAkQANCNRoBU9jiFxtcO2VysMmaG56ryYayNZ8q1h7NsKrEgEABlCt4iDdMzETHdCerHbU1HZsqbknwodD1X9oRzB189qnRk9spG1hNi+uWb6KzLoWt+G4vmxAynpJnWiMMw7yc7XLWreKAfCpOogyQdiI384qC9feIUq5gjO4liCIIGkAHoSfWusMxyOSMrhSEAAhi0DloCok676cxra+O+aKuPtEnZoBrgYLEHXUHZT6HnV74an5wRylo9AT+FUvs7c7ti13QwQNJ3K9PQ1auHcWsBpZyBB2V+enIV6ODBwwWq9nDi1LGj6VGu0FhkYjKDltn2iAq5riQ50IOUWp8+hmqRYtobrkFrjakF1GWedxyW9keem0z7JtnH8at1nyMzJ+ahdR3mUXCwJPsjMyknfw6dQgHC8QyNmtILbEEgSmqyRqq7Cf0gRsdSK4lhSXg788fDB1uQjvcfvhmgKGJEx7bSAUGwEQTrqANWXZm2zXEIXIJYNCgZgUcoZOpgiN+a+8f8lPbUdyQWacznQqOSLyHUtufLm57KYJ7dy3dxAYZMwzAM3gJRl18j3nxFN4cvQKcfYH2kvD6U47oMQSuskuQMpYfW20kEQBINK3Vs7ZrouAboNSy7xGwIHIGV3A0pxjLGKu4i6yS6uzeCTqhYwIA00jaoL3Zq7bcC2uZ5lcwdTuSIXLrEbk8thRpS9BqR9gHAsnfJlztLqCrECUzDXYyV9rlET1iTsyAb4IB1KTLTu4/ZFNeH8GxVt1e5byBXD5lTL+kJUwoEHkeW2x0m7NcIxCsWZS4BtnwKTENJ2Gm1UsKV8EyxI1yXRF0pT2sVRetBgYy3SVUamLAJA1EHpE0zOIylQbd0E7AoQT1gc6g7R2bt28j2kcQtwS1okgvaCKRodtdj0rp+Us1Ucvw1lzWULEBDdAuMWI0yqsKD+jbBDGBMA5Z57miB3gLF2BRQCyLB0kQmTdNeZAiCdToTn4HiUJZbCooGXMQ4YA/pZgAFY7abTHme8H2Uvp41tOWEFQQ8A9SyqMyxrECdBtM8unL0deePsk4BiVxF5ES0qMGBERqCcrAyOhnlsal7ZYiyMSR3ZczJzEiOQAjcRrJJ3G21T8B4ZiLF9LmJVu7Rg4CqRDDTQEKuUgnTqF6V1xhLj3y9khUJmG1zEgAkrqOUAT95o0pvhBqR9iu1hrj6q6qhUsqGBILeyVmSCZ8Ws6Hnpzw7CWDdE3Tb1EB1aD9ZJ1gbjUbb0a3A2uOCqkvHsqWlnkkmYJiOUddqOHZ3GN/aYcHkT3blukyy6n13+2h4UlygzxY27P4NJv5OdhAUM5rcd1AMqJ/wBKn7Op/VLI6W1HwEfhUXCVuYd3OIRvHbRA2QqxICAzqBlOUmNaJ4FYuCwiLad8oKyo03J+4iuj46cW2zm+V9klEg7WYc/1a5qBrMAmY7qZ26UPicomWIAOiydBOm5AJ9d/IRTzi+HvXbKItm4GXNqyyNRpz9KBxFm7nK90c7EtB0PONI10HXlWLg7Z0RklFWCZW0IYBSdAeYOmpG8+hnkK1euGV8GUdTqwPWBoPj5edE4rhpXxPbZST7UEa/zsNtK6s4O/cHgBKgkQo0joTzMHXYeQ5PI6sM6uhjxe3B1UsMqdCJIYE676KNPMUut5ivggDoeY6TybyM+6mTrcuBRbtGbaC2Z5EefLSRUZ4PeYHNbc+hgD7dff92lSotcjzoU41RlANw8/q+Icxy1FJf8AaEEypcNpx4rThg8Zs9thzQ6juV25MvTW2Ynhl1UM24Ubkge4xsD6UNxbg2IxdlQmgyos5VIJRjBAO2hdffScHz/wM64HnZ27/Wbmkd5bS4PgrT/3Ks9UfB3Xw9y0biktbtLaYExm09obwDC6eVPsLxp7k5LBaN/GNPiKNKVWLUjdDquLR0+I+GlJcT2ha22VrBB6Zx+AqAdqN/zX8f8A401gzfgTxoJ8lkqO9aDAgiQQR8RFV/8ApV/9P8f/AI014PxIX1ZsuWDETPIGdh/IpSwpxVtDjiQk6TKbYtL3eWCMpZDodFX06mfsrnDsNQhbNyncDyBkiaYYm0VvX0zAKWD7fo6E+plj76BuFhOZVyttqNvfE6+vKhFHl3Zoqrvdba0jP74gVV+I4q5cytcM+GRPQkmmt281mzmIDLdbKUOzAfaNZ1BFIMQdT5afDT8K6HL7nNGOxybleo4PBJZwqkpbJW1mOinxBMxnnvXlaHxAkSJEjqJ1FXgdrEuAqbDlWBBEiIO4rLFk2bQSQb2Z4kmLFwPh7YyZeQIMz1Gh0pfjuD2hizbUNkKBiBrlnT103G59a5XtALSlLFhLcnrz6kAan1NKLly6zM7MZPtGY/8AQ8q53JF2i23vzQVcM9s/WF1WYgGIHhE9dG/GmJu4BbYR9ioJItPvGsTOk7e6vOO/uJcVxqymROv/ALo5uMfXW4W6ZgAp2gADwgdAKhtktvwMLeCtXAcpyvEgFtz9WD8+Yrng+AZr9n2cveIWhlPhDrm0mdvKuOF3jkdktM4gswlT3aqfzkhlOddQQw25xRmGx6pirWKFpQV0AhlUnK1smdQTE69R7q0jjTiqv++5nlSe56Zi87JFi5bS5IguJXzBG8xRiEW7A+mtbbcMRbIQydBBmNIGu5qhdqeIX8XhkNvDsi95Iuo+5gqVmBGp68qkwH+0S8LItX8Kt1guRmLxnEQSVy6E8x16bCsOE5GrnFcsr3FEtC6/dSLeZsk/VnT7KitEciDVg7MJi7d4Yqxgmu2iHCgsNNYOu7EQRtrWdqO07YxUBsC2yFogzIMeQjavUWLvlS/k894W2Zv+A/8A2f8AZ84m73rj8zaP777hfMDQn3DnXpmHxrPfu2GtOLaopDspy3CZzrJEGAV9fF0qk9nuM444VEw3DwtvKyq63QddQX1Als0kzzqHDflxHV4e6FMlH7oBxzBIMj1rhxXKcrZ3YaUI0hT2v4acLddB7PtIeqmY+Go91es4m2i4Mi44tp3QVnOyjKFk15Zxvi2L4jltDBjOhOttmJUHQhpAAEgb9KtmLv8AFL1lrVzAoqMuUxdBMekxRiScqT5QQildBHYrh2FS+72MYt9u7IKrl8ILKc2h6iPfRXFJPFsL0Ftyfet0VUOCXsThcSVsWEe465MjysR4z05DnThzxRr64n6GneKuQL3i5Y11nNM6mlJSzNt+Bqq2Lbir63rl7Btzsq49GLqT7iqn3igOCWPodizbaO9vXAG9TqfcqCPX1qqcUx2PtYlMTctW7d0pkCZiVZRMzBndgfUCu14rjMRdt3Mls3bfsIucqZ1JJ32j0ipyTy9DuN9lq4wJx+C8hdP8B+VSdquIrZFsvjBhZLalFbPEaajSPxpFiLnEmuC8cPZN20PCiPIhgQcwnNMHSKC/pljW3sYXTqbmn2UsjlVDtIh41xtblpkt8T+kExNsWkWRvMhZEac6vPErrpg2a22VxbGVoBgwNYOhqnJxfG4sPYGHw8MviyFgwWRqM0CamftLxBG7lrGHDLlSCX5gRqNNiKbg+KC1yOexnEsRe71MQVcLkyuFy5s2bMpA00gfGkfaLBrbxDBBC6GBsJEkeXWPOj8bxLiVtR3osWVJgFAWPXSWgfCg8Nwi/e8YUkHXO5Azeeup+6tsH6tyeyMsX7KvJFwARi7J/aP2qwqz9rLl5VtmzfNoyZOVWzaaDWkGJ4Ti7MXbdtSyHMNcw94BDERO1d4Lj3EbpyoMMTvAS5t11fQVOKs0sy3RcNlRZuEFr2FX6QAWYENpAMMQGA5SADQXYj+wYTMXGE9dFM0Jcw2Pugpdu2vO3ahZHRiSTHlImlmBvY2zdOHtd0uZpi4rEzl11DRELWSi8roq1Ydj+IWVuuDjcYpDMCq25VTOwPdGQOWpoTBXgcZYZbt24swGuiG1VhEZRpJ6U3P5U2z4Sf8Alf8Az0p4t9Nz22vd0LiuO6YKchJZdD4id/SnBc/sEmWvi2Ps28i3oC3TkBPszEgHpPWtcH4YLAuBTKs2cTuPCARPPbekHFkxJtxjO4ZCYARWGsHeSazB8N4lYGSzdstb/RF3MxXyBG49anK65C1YBxk3reJu91iGtBmkhVUyYBnUVaey193w6m45dwXBYxJhyAdNNopJjeCYq4S7m1mgTBIGgjQR5UPwJMeUbuHsrbzE/nEYmTBOoNaTjFxTXPkmMndMjv8A0hrxs/Sbj53ZMpCgASegmAB9lW3F27luyq4ZAzKUEMYGUEZtepE+81UMcuKsYjOGto7AkkoWBkgmNRFE28DdxozPdJa2cp7t3tDUBtlOvLUmicdlXARe/ZYuOcN763IEXANPP9k0m7EtD3kO+h/ClFm5isMXt2sQMuY6XVa4QdjDFpihjxHFLcN1LlsXGEMe70PnlzaGrjCbg4ktxUsxaO02FZrilVYysaAnYnpSO5hnXVlYDqVI++ozx/iH66z/AHP/AJV1+VsTcUreuI4MHw28sH4mtsJ4iSi0YYsYO5WcxTzsjdh7i9QD8DH40izVxcv3EBa17cEKCSPuI++tcWOaLRjCWWSY97QWwuLtuQYuLlMAkGJG/LcfCkwxC6khs07m2T68vSgsLexE53wj3rn13ugx5LpCDyH20Z9LxP8AwP8AGvyrjWD2dD+T0eQ9r/C9qyP92kn1/wDf30gyU24pc729euz+mEA8tST7sq/Gg1StcNXbDhJAwtUejMFgONB0EjyEirFh+xpOHe+cRaAWdFOYEjTLnBCgzpzHnXY7GN9GfEd/bIWYVAXDGcuUODvOmgPrUzWHLay0pLwVd8SxEMIIA1B1J67aUdgbNxrBNqSZZWzSQpOojTVoEx6mn/B+wN29PeXVstGYIVztHIsAwyTykk76VVlsm2xyXCCDup3ieXzrJ4CltBjzUvshpwrC3XdAMqPBRjd1tvy1AGhnoNIpdjuBXUvXLbEd5bE+FiwYEbZtTz5+dXLgvZm/irSXL2KNvvDFvMmZnCgsDOZSBCmPL11rfF+Gslx7dwQ6EqxGmaNj5yIPwqY4Ll9VQ3PKrYwucFx3eg2M5e2qqHtQgKke1OaNZOblmBq58X4Nas4Nmv3SlxrYNxFy5bl4IBmVdg2aTI+saoFniGJtoYxF8KJJhm+0/PrT3tb2Yaxbt3HxDXWubhgZHhBOpYzvHKnoNNJhqJptHo/YvDhOH4dYn81mg8y03PvNec8X7NYxVe61khVBZjmTQDn7U7VnZPhWIxCXG+nXrVmyNYdyYClsqrmAACj7tDUeOuBrIe1jcZcVpUpeS6oPI+KTbb0n7dK0w80JtKr/AJJmozimz0/sMmTh2HHPu8/qWl/xrzziXZXGKj3GtQqgsxzpoAJJjNrS3s3auXsTZw30nEIHkeG44yhUZ9BMD2Yq34jsmCuIAxuKZrI1DXRcDSswURy6jcQwHWCKalLCk1tuDUcVLosvYu2V4XZAUsTaZ8oMFs5ZwJ5TmAmkl7hlzK0cOximDDHiVw5TGhj6QZjpVdXgy2MHaxN/FYvLcy5LeHc+EEEj2nC7DYemtHcV7NNYv2EOLxLW72oOa8zIBE5kVtRqNdAJMxFYuP2e5qntwWv/AGdY62+BK2mXvwXzg+1mJORjzKkZdfLyqPsxwO8twm+uMFw5s176QMkQDGXOZMg7LzqtcS7LYZbNzEWXuXe6MF7bW2iPaBKMrWyOe8Uyfs5h7Vq0b+KvE3VDZbmJCjZSQA58QE1MqfkaHOCwqDioyXGuBbRYlrhchoKkTOkArp50d2kwL3LoK4J74CgZ1xbWY1PhyhhPWfOqL9Dstdt2kUqjOFGRgDGcicyGDpBkb1ZH7G4VXujvb+W0oZiL7MRImDbUZxpJ8+VOcaqxpgXE8EbZGaw9iQIRr7Xpg6tmLGOWnlTbsbhkZ2fvCHQ6ICJIK7md1Oo9RvSyxwy1bwoxEXrgdoCI/swWEs1wmNtvMCp+J9nbbtYCglrq5lD6XLeilpKxoJ1jpzrRyWTIiEt7LDg2Nxbtw2DgrzRnuMLJLBdFlgfFA6xHKq/xrhaWGXI2ZXEyzLJPu39Y51vG9i8OqMwF24EbKwvFiDscyg6FdYny8qHwXDcPawdvEd3dbO2TJa7uRq22fl4dp3NThvLvY5Kxr2KUd8/nbP8AiWt8Y4hZXFMrYO65D2wbquAskIQYzjQSOXKlXH+BKt5LfiuDKWAGYETprl9K54Xg0bJZjwO2U66wSeZmqlG/tYJ+Czdt1m0gG+c/4TXWMa1j8NltXARIzIHKkRM22gysHl5UlTsvYtNfa0zXHtwO6t3FzKDBBctMTBMATA57UGeB2HsHEvaa64bKVslVYcjLHlz+HWs9sq3H5LD2fwQwKXe9uKlolSitcJy6HNEnnpoOnnSXA4j+tlrV9LBuFyoupKuCwJT2lytsRrO9cvwPD20sXURh3rJpdg3EzMswdRpPLy3muu0XCVVntFGdIDeJZ5dQIq4pO9+RNlgtJdOI/O4WwVgj6QjqGiOakZx00Y0ovdymPs905YZoaXLhSQwgMSeu06UFhOyeDaxYus4t94wU5n0YkkBEB0zExG/oag7ScNVG7ruiEGiqTOcTodAAJPLX8AsOKbpMJSpWWbtVdRXsv9GS+y5irG5k7uCp6GZ/CkvFuNXboVriogRgwVSW1BBksQJ9AB76Y4Tspbt28iIUulM5gAJm+qfP/wB0v4bgLN+3fz2r6NaWWQ3E8WjaCBpqpGtEciQPMWLtZlawRIImN+oIqvdmbFq1i7bIMmdLinxGP0WG58jXPZzs9YKveWzcRCQiqCpc6gMSRoQPLoelQdpOCqri06h1Yg280QZ0A10kTFVGMWst7icmtxj2twdt8SjABnIUA5jE5iBzjnTTi+JsYfDi02I7nNoHUFmkEMxgAxP41ScVgFtBbb2FZJk21dBI11kSAZjemzWsPh8KLgsNaa4CyoGU+ED22IUeUATuPOFKHERqXLLE2Iw+OsE27qsVMBtVhgNZB1AP87UL2PuBWvoxAModT5FT91Lb/ZvCvesI1kv39tn78EQCAGAjLBBHOelB3OD4c2L91rIxD4dzb7sEDRWAJ2J2JPuqVWVqw82P+J8Ea5cZ1uW4JnVj8qQY7Cm25QkEiNVMjUTQ/abs/hMOVK2lhlzQVEjyp5h+E2VbDWgjst5GPeq2iEKGAjLEHXny510QxciTk9jGeHme3ImFaNG4BcOcWcM7XC+ZlAVIXQEyXJjlsOdEW+FZr11ZhLTEGCMzcwqg8yI1Olb68NzDRmLVapLVzKwboQfgZo7j3DRayMgIRgNyDB6fClOarjJTjaM5RcXTPQ1AImsa3S7gN8XbKtsRKkjnlMTTDu26z6/6V5r2dGyVrg+TkxChdW1JJIg6T/6FauYhNiY9xpmnCrcySfiPlWrvCrLGZI94j7q2TxEqo0coPezLfalhhvoveL3XTIZ9rPv610nau4LC4cXQLakMuVCGBDZwcwE761ocGs/WP8PyrY4LZ+v/AIflRkl6Q9aK8slsdtcQqsoxbkMIlgSRvqpiVOvLyrjGdqmvW1t3bisFIYHuhJIBGpCy0zrO9a/Iln65+K/KuhwSz9c/w/Klkknwg1Yvyw2729xDMrfSmXLACogVTBkAqFgjlrXI7dXu9a99I8bBVY9ymoXbTLHOhhwOz9c/w/KtjgVj6/2p8qMj9INWPtmsB2suWcwtXyquZZSgZSesMunu8ulTHtxf7zvfpT5wCoORSACQSACsCYHLlUY4Dh/r/wASfKuhwDDfrP4k+VPJJ70hasfbIsH2qe1ce5axDo1wkvCghjJOqkFeZ5c6IxXbS9cChsS8KQwARQAQZByhQpg9Qaz+j+F/WfxJUi8Awv6z+JPlTyyvhC1I+2D3u1txry3ziH75RAuZEkCCIjLl2YjbnRLdubzAq+LvkHeAqz6lQDXY7P4T6/8AGnyrY7O4Wf7T+JPlScX6Q1Ne2R8N7ZtYXJaxN9E3ygKQPQMDl16RWXu2M3Bd77Ed6Nrk+IcoGug302opezeF/WH95PlXX9F8MdQ5PvB+4UnF+kNTjxuZjO2BNsC/exDpdBYLCgNrEsFjNtzmurH+0N1UL9KxekAQUgDpv6VLi+A2WVALchAVH5yDG+x9/KocN2Ww5EtnB+7+HWs0rdUjWTpXuct20tFg574sDOfw5s0zmnNvOtEL29SS4bFZzoXDjMRpAJzajQaVtezOE5s/xH+Wt3OzmEjR2mRuw2kT+j0mtcrfNGWql7BrHbVLc92+KQsZOW5EnqRngnzqa124QNmU4oOdGcPLsOhYsTl8tqm/IOBG9w/vr8q6/IuB/WH98fKjTfQay7BrfbO0gbuxiUnRsrxO/teLXc79TWsP29CLlW5i1A2VbgAHXQNUw4JgAS3enWAfzi8vdW/yTw/9b/Gvyo030GsuyO327tghgcSG5uH8beRbNJG3wrH7eWcsBb6kGQykAg9QQ0g1N+SuHfrR++PlW/yZw79YP3xTyy6Fqx9MFXt3aBzA4kPrLq8M08mYNLbDfpWrfbm2pLIcUjH2ilwgt5tDeI+Z1owcM4b9df367/J/Df1i/wB5RpvoNZemBv27tkHN9IZj+mzyw6QS0rrrpW//AJAWNXxp9bzQfIjPqKL+hcN/WD+8PzraYThs6uD5G4Y++jTfQtdemB4ztXaT81cF90IDBM5KAMJEKWgHU7Con7coY8WKMQQWulisc1Jfw+6nOLHDXiWtiNJV22Gw9rahvonC/wBYP7w0ZJdBrL0xfc7aWC3eZcR3o2uZzn2j28+bbSu07dIDmzYmSAGPeHxxMZvH49zv1o4YThX6wf3hqRcNwn9Yv941Cg+g1V2J7va+w65HW+6TmCs8qp11CloG52HOs/pjZyd2wvugAAR3zKoGgADMQojTSnRtcJ/WL/ePWo4T9df37lUotehaqfhiVO1+HVcq2nUdFCD7jUo7cW8uVhfcAQM75oHQZmMDypvm4T9dfjdrnvuE/XX/AL3yp/b2hZ4+mJsP2zS2MqPilT6gusF+AeAK4t9rrSsWT6RbY7m2+SfXKwmny4jhHNl/73yra4vhH7M+l6lT6HqL0xTe7a2WGovux3LwfTUuSfsqDDdsktiEfFKv1VukL8A8U/XFcL62x77vyrr6XwwbPb+Nz5U6k9m0TqL0yvP2vsyGAvKw1DKwBHvDTUWL7TYW6c1227tsWfKzH3lpqzHiPDRs6e7P+IqQca4eP94nwb5U7k/QsyXhiLD9uLQCpF9gNFDNmgdBLaDyFWVMTddA6WLhUgSfCMpP6JkyCOdDJxvhonxJqQScjEkiIM5Z5CiL3bHDCBaugBmBc5W6gk6jU+dGaaWzQrjJ8M9D7NYd7dhUcAGSYkGAddY0nem4avOk/wBoGH/4kf3bf5al/wDkOx/xC/3bf5axeE3vaGp9M+eAzdK7BPSpxiv2akuXSNxXJqT9Hq6GH4mgTMa3nNGLdPQfCsYg/oijVa8CXx4PiSBBeqRbtTWMEzmLcFt8sgE+gO58hXZuFZVlg+Y1HuqljGc8BxIgakVqMtWgw0g1Ihy7j7Ket0RpgQNdg04sXFPIfCikUdB8KWv0VpdiW21To0c6dIo6D4UXZcDSAR0gUtfoawexPhL1MVxI6U1a1aKjz3GUaUPbKqYgEelQ8VPwWsNoy3fB5GaLs3TyU/GurbqdoHu/0qZT5ipzlZTa3nj2ant22b/UVD76zXkxozDo5uYY9D8TQV20Z2owk/zNQXaamJxFWINLr8g6HSnN9BUiMpAMD4VaxKIeHZWHumo2erPnQ6CJpHdabz+o+4VSxuidLsCLVqTVhsipaNfoej2VmTXJmrRFaNGv0Gj2VbWtEmrTFcNFGv0LQ7KsTXJNWgxXDKOlP9R0LQ7KuWrgtVoJHSuCwp/qOhaHZWZrNelWMuK5a5R+o6DQ7K9NZmp6z1wWo1+haPYkDVstTO9dXnr5UJcaeQA8hTWM/RLw0vINnrC9TqgrjNO2v3VWqLIQm5WXARvR1rCZt/sohuGdNR9v+tOMm2S6QpQmurj6wOX2+dGfQyK39BNVTFaF/empcMSxAO1TvgjXVnDEQeRmpxHJIqCi2awfDwzARtr/AD9lTYzAxTjg2H0Zo6D8T+FTYyxNViRVmCxGmU65ZK+lcrTfGYbUDrSoLG9c7W51xdqzhtaMTHvEXALqjk85h6PuPfIpS17U1LbxHrUOKNVNoZWsOra2rkP9R4U/9JnK3xBqQ4tlOW4hnz0NAK4OlFpi2ACmHT6ryY/5TuvuNS0XmiwgKTqse5v9KmwuNZfaHPr7qAAU/wBmxQ/Vc/c2x98Vr6QySrqamgprcsdjEE/o/aKJS636tv4f81VK1xYKdCaaYbtKn6QI91JwfoFJD9b7fq2/g/zV2brH/dt/B/mpSvaax+18DUg7UWOrfun5UssvQ8y9heAvNoGDSS8GF2DGNj0imgc1WsFx+0O7kN4UynzPhn/CfjR39I7PRvhQ0wTHWc+dbz+vxpJ/SWz+18K6/pJY/a+Bopjsbl/Wo2NLU7R4Y/px6g11+X8P+sFFMVoKuLUYHh+NDPxzD/rV+IrvBYy3czd24aImD1n5U9wsWcNGV29ojqRpMmdetBd7N9z4ozHkSNgBVjtYdUnKIkzuTr76rS41ReeWA8bbnzimhMd2746N+63yrv6SOjfuN8qgt8Us/rF+Iro8StfXX4ipKskOJHRv3G+VcHFjo37j/Ko24na+uvxqFuL2frigVhJxY6N+43yqK5jlAkzHmrfKofyta+uKhxXE7RRhnGoI+ymFktjiKtMkCDHPb3gVIcUv1hQdviNoFvGNTI1/ZAqUY62f0h8aYkdnFp9YfEVEcSv1h8RWNik+sKjbFJ9YUAbOJX6y/EVwcSv1h8ajbEr1FQ3L5O1UkS5UEHEr1B9Khe8T5UGTD69K77wnYe+rSRm5Nkugrg3Ogn7q5W3O+tS5f5FMk4S3O+vlyopbQqO0YMR/MTRqJNNEyZNhU2pxYsCNqBwNvSmtncVtDZ2c89wJ8PO4EbafjzqJcOMo0plcTU+IH1mfdzqMDcaeXX5V0VuZ26Fl6yKEZCJ00B/nSmtwAnUg+nKgbgAOtRiRtGmFKmPuG4bLaUHc+I+//SKiv2qbd3AA6CKDvLzoZj5KpxTQnT3+dKcSIUnoPwqw4y0SdOcmegGpP4e6kPFVhY6kD8a5XydsOEIXqWyNK4cVPaWpNGyayNa3dvBTBFT4VdKAxpm4fKBSY0TsZFYMUyiD4l6H8OlcczUeL2ApNIqM2nsEAW7mxyt0PzrVvhzlwigEnQagfadBQtoGQBzMV6TwXh2GvWLVru7wxHd5mcKApzS0HOQrQCNuXpQrXBcsj55KtiOx+LtiXthB+0YqK72axCiSF1EiGmR5cj8auVpcZh00DXbCnZodBB0gqTAEfomBzFNMNYt4i0bmHhTu9ltVn8D+0INaKV7GMoOO/K6PMF4frBe3K6f2ievNhUh4ePrW/wC9tD/9084/w7NOW3Fwfok+KPIxF0fxVV7luPdWbTRSlYzs8GuXPYUNy8Ny0fueur/Z++iljaIABJJa3oP3qe9jUAsyY1Zj+H4VaCARqJG/w1FdMcC1dnJP5bjJqjyxeD3tsqzpobtoHXbQvIPka7vcEvoYdAp6NctA/a9O+J4LvMSANM7KpPwX4xTLjmBBAtEuzIRD5dSANFMe1E6dKjd3Rq5JVfkqS8ExB1FuR5PbP3NTXs5YfDu/eoQGURqhmDv7W2prE4Qd216DK329B6a+m9E4WyVuq1xQ6hSoQiAJOkaQPdUyjNqqKjiQT5JcJjl71yM7DSdvCZOkdIjaqy3Cr9x2KWy0sx0Knck8jVrxnErCiWszqRHeE7dRt7qrWCVQjvqsMoGXfXNpuNPlWUNjWTtEf9HsV/w9z92o24Nf/VNp5Vb+zLq1y9qxG0EmIlj9bypxjrgyEAaQfurqhDMrOLExskqo8xbh139WfsqbDYd8ohW2+qakBy6id4050cjNEknXfXXzrlnKR058oDes3Dsrj/oNR9xcG6v+43yonFqsEwZ9fcOtScLxuVCrEmPZUnQAyWiTpryG8moz2rKUrQL3V3KxVXIjXwGfun4UAMJc/Vv+43yqwYrFd4MttyBGw0j1g7fyZqZMPbsiIMiMxiSSNDuNvT/WrU0lZMporBsP9Rv3T8qiNWnjd1Xw3eWwAEuRppvEffVf4ggBEdK0UrBbqyPDNrTAEnaltjem1s0MZytrrUwWtqK3QTZkV2prmtqKBHanWj8Os0PhsKXBI5D4+VMMJbpoUuArCiNKOWhLWhopDWiMGHXQR7J/ny03oJYzEAnz/GaJjMnWOXXy22oVlh9FOw0Bjr6dfsrqbWzMlF7ohvQNvtn7DNLr6ZjKjN+FMr+h3InZT8/9aWcQwUnNnZSeQJH3VEqZpG0XO7Ql8aGsrKTMYgtm2MgMCdfvNbPDLLxmtqdT91arKxaN7ZpeAYWR+Yt7fVHWk3aDhllLqhbaqDl0Ajc61lZUJf7Nbf8AgQsIuOo0AOgpJc9s/wDMfvrKyplyaQ/FE9Q4zet1lJlx5NJuPfXpnZ1A7nNr+YsaSYPhO42Ya7GsrKIjxPJacATlzS06/pGOfKYqqdtHNnEWLlr82zhixQAZjIEmNCda1WVU/wASMH80WbtDhkdZZQSQDtGuhkRt7q8z45aDWhcIlw5TNzIHX6x8zrWVlCCXJYeyQ/qyf9X+Jqecqysrth+KPKxfzf7iG2v9aT/nH3mrFc3NZWVj8bydXyfBxFKO0i/mS3MFYPTUVqsrpZzx5K1xv+zJgT3pGw2m58h8KO4ThLZspKKcwBMiZMnXX1rKyuJJZjsk2o7ewy/ZW1buPbAVjJJHkJH3mlnDcZcbDXWZiSMwBP8AyzWqyh/kZcxtgVpAFEaaCuLugrKyssVKjRPcWYm4c0TppWINvUVusrJcHR4CsD4dtJJn47V1nJmddvtrKykyHyHXNMDfj9av3pSPiH6Pp+ArKytkWuAazuKbpWVlNgEWxWm2rKygRuK7ArKymhBvDrhDQDpB05bUVgqysoXIpfiGIfEKJQae6srK0MvAZhDKgetC4iyuZNBz/Ct1lb/0ozjyyQ2hqPxNC2BJJPWsrKh+TQ//2Q=="></img>
		     <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqHnl-BZ4XWLcwB64yrc9zVy9YgpNNsJayB687_JcXWbRsKL4p"></img>
		     <span id="college_name"><a target="_blank" href="http://radch.net/">Dr. R. Ahmed Dental College and Hospital</a>
                <?php 
    		        if(isset($_SESSION['id']))
    		            echo '<button>Add to Favourites+</button>';
                ?></span>
		</div>
		<div id="college_menu">
		    <ul>
		        <li id="info" class="selected" onclick="info();">About</li>
		        <li id="course" onclick="course();">Courses</li>
		        <li id="admit" onclick="admit();">Admission 2020</li>
		        <li id="review" onclick="review();">Reviews</li>
		    </ul>
		</div>
		<div class="information" id="college_about">
		    <h1>About</h1>
		    <p>   ABOUT US<br>
Dr. R. Ahmed Dental College and Hospital located in Kolkata, in the Indian state of West Bengal. It is affiliated to the West Bengal University of Health Sciences and is recognised by Dental Council of India. It teaches Bachelor of Dental Surgery (BDS) and Master of Dental Surgery (MDS) courses in various specialty.

Southeast Asias' oldest college owes its existence to the legendary visionary Dr. Rafiuddin Ahmed (1890- 1965). This college has churned out many stalwarts in the field of dentistry and surgery over the last few decades.
			<br><br>
	    	    <span style="float:right;">Dr. R. Ahmed Dental College and Hospital<br>
                 114, Acharya Jagadish Chandra Bose Road,<br>
		        Sealdah, Kolkata-700014<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://radch.net/#abtid">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Courses</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Oral & Maxillofacial Surgery</h1>
    		    <p>
					

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
				
				<h1 class="course_name">Orthodontics and Orofacial Orthopaedics</h1>
    		    <p>
					

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
				
				<h1 class="course_name">Conservative Dentistry and Endodontics</h1>
    		    <p>
				

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
				
				<h1 class="course_name">Paedodontics</h1>
    		    <p>
					

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
					 
					 
					 <h1 class="course_name">Periodontics</h1>
    		    <p>
					

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
				
				<h1 class="course_name">Prosthodontics and Maxillofacial Prosthesis</h1>
    		    <p>
					

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
				
				<h1 class="course_name">Oral and Maxillofacial Pathology and Oral Microbiology</h1>
    		    <p>
					

    		          <br>
    		        <a target="_blank" href=""></a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">BDS Admission</h1>
                <p><br>
					Forms<br>
Form<br>
Anti-Raging Annexure<br>
UG Discontinuation Bond Format<br>
Release Form Format<br>
				<br>

                    <a target="_blank" href="http://radch.net/admissions/">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">MDS Admission</h1>
                <p><br>
				Cash/Draft Deposit<br>
Bank Account Details are as follows:<br>

Bank: State Bank of India<br>
Bank A/C Name: Dr. R. Ahmed Dental College and Hospital<br>
Bank A/C No: 37628949747<br>
Bank Branch: Muchipara Branch, A.J.C Bose Road, Sealdah, Kolkata-700014<br>
IFSC Code: SBIN0006145<br>
				<br>

                    <a target="_blank" href="http://radch.net/mds-admission/">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '12'";
				$res = mysqli_query($conn, $sql);
				if(mysqli_num_rows($res)>0){
					while($row=mysqli_fetch_array($res)){
						$sql1 = "SELECT * FROM colleges where id = '".$row["college"]."'";
						$res1 = mysqli_query($conn, $sql1);
						$row1 = mysqli_fetch_array($res1);
						$rate = $row["rating"];
						$star = '<div class="star">';
						for($i = 1; $i <= 5; $i++){
							if($i <= $rate)
								$star .= '<span class="checked"></span>';
							else
								$star .= '<span class="unchecked"></span>';
						}
						$star .= '</div>';
						echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">Review for '.$row1["name"].'</span><a class="mailLink" href = "mailto:'.$row["email"].'?subject = Feedback&body = Message">'.$row["email"].'</a><br>
								<span class="header">By '.$row["name"].'</span><br><br>'.$star.'
								<br><br>
								<div class="desc">'.$row["comment"].'</div>
							</div></div>
						</div>';
					}
				}else{
					$sql1 = "SELECT * FROM colleges where id = '12'";
					$res1 = mysqli_query($conn, $sql1);
					$row1 = mysqli_fetch_array($res1);
					echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">No reviews have been made for this college yet!</span><br>
								<span class="header">Click <a style="background:none;padding:0;margin:0;width:auto;text-decoration:underline;font-size:20px;" href="/KGS/reviews/write.php">here</a> to write your own review.</span><br><br>
							</div></div>
						</div>';
				}
			?>
        </div>
		<?php include '../PHP/menu.php'?>
		<?php include '../PHP/search.php'?>
	</body>
</html>