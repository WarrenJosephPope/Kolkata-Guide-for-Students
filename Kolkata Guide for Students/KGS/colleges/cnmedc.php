<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Calcutta National Medical College</title>
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
		    <img class="bg" src="https://qph.fs.quoracdn.net/main-qimg-bec6d81200461c1a6df63e7436f59095"></img>
		     <img class="logo" src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAO8AAADOCAMAAADhXqUYAAAA5FBMVEUxv93////8/Pzx8fHY8Pes4O550Ob39/f09PTm5ubp6ent7e329vZHw9/s7Oz2+/2U2OpZyOHi9Pnh4eFqzOTs+PvD6PPO7PWH1Oi45PCh3eywsLCnp6fV1dW4uLienp7CwsLMzMyWlpaNjY1+fn5gYGBLS0t1dXVsbGyampphYWHHx8dDQ0N9fX2GhoZ0dHRSUlI8PDwkJCQzMzMhISF2t8WIrLRSrcC52d+l1eDU3uDN3+NJvNVrv9GhrK5rsb+SpKZxm6SIqrCJv8pem6hywNGPrbOovMCSyNQXFxeTqKxLprlnTqzfAAAZH0lEQVR4nO2dC2PauLKAkQzYBpuXeSWS/OT9MCQ07e6eJJvT3e25p/f//587IxuwgTSPtekmN9OWBCxL+jyj0Yws00Kz8O7FpJSSWAr/T3i3xAXz7M03m3CNz3mZTXUPfF7e2y9f7m4Yu7/5fH/z15cvZ2rbVFV1C3w+XvPu98/3jLG5J4Tw5i5j/OHm97tztKwZEvicvO1/P9iuV9F2joNQqukeY1//yL1tU9kDn4f37iufWwoFRoKGpeJPorhzjWjCfviccx/MKgKfj/fLA7NU1VAJVTRFUSzPEp5lKc6As5qqG4rrf83VfZk1AEYFn4X39jO3wHoNQhRdFU64CkNnOViGwST07AG3NJUqrvNnjv0wK7GCz8H7+9QjOmOCWGzpU4uvZty2mTt2mO/bwWKgE6oZYNsPf+XWBbNSU5Tz8N4+sAqxlktnGS6HS0cl7sCfheCdZwPXFmwy41NfEALEws9tGJs6KPgsvF8ePHATGgumQSjAgAVR+Djktgt2DToPJo7ur0NQPlGJwh5u8+nF2XhvnN8I+AnBVwOLee5wYlNVVWhVCJ37NtP0AXeDcDoeszmhKvH8L7l041y8N45CqqQWhG4wszm3bKGAgzagZZU4a6ZQ1QOTXgaBvRwyShViBbkAn4n3hhvIwCccvbLtWjDngrZVmJM0zdCFRiH6sILxeOrauu/UVI3oTh7A5+G9cTSCKvM97s4DULUB8681txnn+Nd1PYhAQCzHYW7I/NCADtUecgA+C++dXyEKdYfBwBZTC1oj1LId4PSEBSLmNnc46Bxc1dwVq3EAY9t1DCsHp3UO3ltfB1xvPJlOfdCkSojgPhMK4EGoZYDfIrTm8QBjEcWg2oAR4q8Ch4qvmfflDLzmd5h6wFY9fzmZCoMSnQd2FcIsRYqGcaUCIZfFAgbRBqjeINZsoNhzYmc+D+fPa35zQWtCEDoPAvRTbsBqEEgJS4bQWkSsSWInEEStqEQEwnMEzNf8Juve5M57xxVVrYWDChgtuikOQRStqnS8JEas4e0LXhIbvHbVsW1/4KsG1bMewrnzNh9AZYQxNxCQ/JGawxWiKRrx1kMw84hUQxXjC85CXCUVi/DJbOJSjcw/Z9ud3HlvbMD1lszyAJhUfZsaVUXBIGNiE01JaRioVYM7KnKuXHcFV8rg2a565M1r3lcoNabr1dRVYMA6NvgpBCP2pxGmhri4gX8iNSsQdVCHgyHYzFk5Dg7l75n2Km/eGxfSXcbtcOXAZAO4ihCQ5CpUXy9sl9m27dpz4QrNQL9FDAtyQocRmKX84QzSRxgKmbqsnHnN+xolYjgVDsSIlDmUBotFWCVyAK8ZxhmMBYu1Sw3D0IiYjIZwSfw5USHWst1AhyjzW6Ydypf3DxeiCXcKCQIxqPBrBnWuNtchaBjgQseCSUjn44GgoN4qsYabzQLSIysA0xeW7Yeuaqj/yXIE58trfrdUVXDPdXgFRjFMqMRejK4WHnpmQqaLSbCcBS5YOg5f4mxGiyGGnrZDjXkY6mwCp4ivGfYrX96//qPBAByuwgpoz+WUVPhwMRptJhYQErH+dH396cqD6VgxIN7w1lejxWLg4UB3ScXzGA9tSqv8f7LrUb68N54Ko3E4XoEKq1OLiNnmagSyGaJ9e5PxYLJcDHUVpyPiLvDYYrOYglfGHIozw1lCZuxmOIJz5W1+tijxWLBiMPXajFRmmwXijhbXA4iUIU+wmDfaCIykib6+lsdGmw0nKvdo1WAzDgEmEQ/ZLdHmynsHaQFMp0CqqpWpIOwqwh2NrtYW+mh1sBRXwwrF6Nm+utoeHOrEcxSItEe+zxRS5W+E93cXIqpgMrXnMDgdg/hAtFiDxY42yEtp+GlgBRhW4jCHi4HIC/gD/syBKFv4jC0nnLq/Z9alPHnbkAhakNcyyHRUBkPYXiyAaRisrzZDmIOJNryeORaJhu98cXU1W4LDWqDywfwhDOWcj6dTIe7bWfUpV15eEbbnD0KIg3WYgak1uuLB9Yx6i08OUasGZVebq4kghlZVqLH671AXmwVfXk9wMcvRiYDgi3tzr3KfmUHnydu8V7grIGoAFQoOjladDIlzPdRIOFMIpryUbzabmRUp2Btx4m2uLLHxiQaJArgxqoQhcy0tuwGcJ++tTXkYck/UDNWDvEghNifBNUQUlqXKlIgafDm6ZkSmCqqokPnVxlUHGI5Q5lGYopcr34IAPLMsOE/eO5tWIMtxOVOpO6dy7SbipapiyAzQsMRoJPAd5IKQHgMvI7qhVjXi2oZK+GLMa4S6mYWUefL+5ULqbruOB2DMI1U0YBJ+GtZAfUYVV3EoC7wlaFPDNwba9BVMvmAJAO/BCLAY2AfMwPPMbqDlyjunpDaejGEqrTI56wDw4Bpcs8z+8D7daigsEmleLmF5i2sHY2utSgWvqsKCoBISCC+zG/858pp/eMC7GoYwAhWIsJBQVcfXqN94oU4NN7OpiNft4IVYI8mLqtftChVuGNqCUu9bVl3LkbdtQ3Jj2SEkB1qVWXL5FXknGonUqaj6GCakkRvd64fPgHfjELlCayBvZRoM1xB4WJlNSHnq99ucqpYQc6i/ymSQjLPs9UqNV55hfAYu3/pnOSeJ0XWA8QfYts4qkBtDigT6FW/BniE7ogboDL2TEvOS2gSjiWiJDobrZK6vN4ySeNEO7TmkcjpWLbuiQsgJ9NrbGL+Fvzwq03hDUZG3KrOg2fXYoJF/Iu5kOJyM1uOBXJmVvOvrAZX6Bd9cNQxNbmx5I7xNW8V5Vcepx/akG4KU8NOYUtQ44A4ZpBG2ogYzPVqaRd6lKnkJRGQqnFjRDI3O3wTvLfKSaugBzNyWvFQfxvoFVU84gZAC88JBQFUNbR8OR+YO6T8z4GxrqUOhtzH/3oLq1Hm4HtsaFRhPxgaL/qpqEGdJraFPlNUSxjFYNACTCvDCbC1DkTmc4QXrqWdQ+03Ez817iBzZZL32gZPV5BqdWEsHTCGICnwIjznVfJ9WxzZBt0xqM+StyfsMuE4drEejKaFvI18wv8GkS8WKQepX5ajBaMKhKtUhZfLBnDUZgxAS2sQyICOuDT9NamjPVOc6uDTDXrsqrbwN3sIdOGhacyuoUNvGOAKSPuAlxuTKIyysbbeLuhNhLcYqJdXJ9dCShuAxDDqpBelClvdUcuX9Mle1KmjPUlRqTWu4yO4uwJ6Jc7VZW/pw5jPX81weDCfWYHMdQOAleatQnqOXw5vC4J7d7G6p5KtfVlMVVYRrXyUad4lcdMXxOwlqA64OQjsIgyDgwvfnw7k78Yix+rSO1qanVfTiFV3uUcvuDkOuvOZnoRJrFtgOJIK4YKcSe/MpIHTiEMchtq+qtVoFZ6a5GFYUyAzp6r8LQcCwmU3lXeJlwISe3XJOzuvtf4CzqXLbcFmVqA4XrpguNkshJjN/4uvueuVLgZzAXg8GQ1v3ZtcLBjG37YBlYHjCwwnLLnrOm/fuHnexs+FiCQ2ICWd4A5SBcMfB1+l06sNfh9nwiQ+HOf6DIxPp3VQrsCEKzfKOaM73Bz/jops99G1bMwgb2JInhuJcsuMLd6KLMMXbo9zh4RSCaK1KrMlyYle/Z7gDPGfeu/+oKiSDQeASCIuXqym4J3RRKP7UwVcQ+Rr4cMTH36YDSJmruKTDxHTIvSxveOd9v/sbep+pr3iQxuI2I0PXK7qlVyrVWm3uwiu8QbHkxzX8VauFtsyXIBjzha7fZ9mtvPcz3DGICi2dD5YcvDPeEsWHB+Af7rZy5e4NEj+ngvtHZUdsRvGOkiFqYjKpiLe0nwFHMISJlSGzIJqAwJ9jNqCp1A2cZWg7U19UhCosoQu56o7hCXOMKENiE8ty9ftMd2Dlv/8K0lhQFfOXU5x/maOQyFSHznQ2Ws24cIQf+jxASnDJKvMVGVBSbrkzn9jZ7rDLf3/dZxiMBpkOB7Y9B3u1fRjREC8GoTuHSHIZCPDXkzEPOTg0jVSnuHUYThCuEwrmZbqZoXAO3uZ3yJJUNhBiCJGkRj3fxedxwtB2IUv0RTXwbO7bjo3bZL0QN4YDLg1H3J64JOPtZufYHwsuS9XAVw1dV26d050p3jLgQjE0vJOig9YhNaji7o5wjvcNDdyxtRoGgrgZbyc8y/7nP2zcu2ALY7WsAhlFZyUIZMFVvI9igBlr2L7OAyYHd02rDGHgzgJiZWzNZ9rf/lWmRtqYw6hV8EmFqj115rqCj5qpmB0QI97vjbasCYW6g7GjU32a+Qb3s/DefodMT7XmItz4YLVVIAQ+h9tu9ECsi/vsbIvgxlk4ZnNCXBi72jT7J2TP87xGE7e4K2S+XhmktvINfDJUrQrXls9rcO56loGrtOC31XnghtwCvStO1pu9C2d7Huf2QZAqmKkgBl8PXK8q1y2ofCJHmjQGG/jTDhnMXJPAIEYeuGd73uoWpl3IZymtQJrrTxi6aPRNmqpp6LFw5aai63wcEnblVypE8bPblJMQyaud4Xm6268uRMVVg7o+XztsAsmgC8G0Ifc+q/jEs+fPGCTEkBnDSP7Nz+cZ0bPxQqDFqpjVEo2veDC3x5Ol67gWdy2wc8iFV3ARfD7lkzk+hvTwv/l04oy8hRtHgFOCGKNiO1awDJ3peuoOx1wjfL12wsBaTebzigIenH3L6fHQs/IWbj/bOoEoA6ZgCC7WjK2D6QgCZ+ItrhyIHhn8qpLW/D6XoSvlrLyFwpd7uwI6NlQNYmfdC3y+DMYe0cOBW7M9fPSXeuzPvJRbODtv4fZ3x7bwETpV3smGxi1bwC/4FQb4PQ2e8z1H2vPzgtw82J6OX76BCRFyQ/okv4NDEfOH7818O/ETeCFj+vd3Nhf4JRzbG0iaLoTLv37OVbcoP4U3+kKZB/k0znw+d23GnG+//3mO7w36Sbwozdsvd3/d3Nx//uvu7kvOZryTn8gby7lII/n5vOeVD973LR+871s+eN+3fPC+b3keb7tfapRPHihm041ysun244H0ReNF1R4Xfw5vuUVaxSKpX544RJ5ulMRXqlj6QZlu4s2JgqXi03WckOPiz+Dt1kt4wGzUu0fHMuMliYv5A97TVvaovIa3W98+rNjsXBwezE6/ZE/yA94Xyit4+2T/bGa7eFgiM97yRX03an8qb+e48UavWOxFEDte87JYLF7ILu9sromnNkqkWyo1C+VSp1gqyUPNCyhbSjUG16TY2n4S97LchWKNqKJip1Rq7OtOtAbXIn4f+6Zk7S/nbZNDZ9nv9Prl8mU0mLe8jXqxUW50SSPZiDx4xGt2O6Vyud+rJ5/pBV6zs3UPsoJ2sdUolxstvAp73qjusmytWI8ISaFf7zbKFwSPpWt/OW+pdfhJP+pnW7YW8/ZJ1HSD9A95j+05/tHtpHmhxstEwWZUo9mSVyHln9uxc2tErZJ+BFeqH9X+ct5u7/izSC6Ke6Sd0ePFeIp323LCQ0VlGvEnqYJ9csS7c5uXdewxabWPK4zevJz3cScjaSKkRj155jN5U++jMrHPSheUh5K8fbJrrYOKJtvinWR0ISt5Oe/FKcdYLpfbSd6LlBE8zduECswTvLHP2h5oQ7ETvInWZO92ao3PS9T+ct5G5+iMLjqeYqe1501X+xRvv9XqlrrFTv2YN/JZUUHwbxelXqt1xJtorXTMm6r95bxNcvDVCOBAomKNBG8qDnmCt1GP2VrHvJHPkgW7rWbcgRfxpmt/xfzbS9oqFLjcGnjCntNO/AneevmwXLLP6LPwQHvnEo54E7GH9KYp3nTtr+Btkr0XMKG2boomQkobwW7I907xNncR2Ule9FlST8XUoSTvPiQw5ZyY5D2o/TXxc6Pe35ZttRK67O15wfjiU7sXe2/dKJ7UL4mra5OTvOCz0BTLWyd8ecRb6O0uaCt1Lh5M1/6q/KhBunhBIT/C8LkZRTVmT/qrdtQYXAlZ5AJnfjMKvUodM+aFIYn6L/bkzYSL6Nr0O53TvGZHdjWKM+DyRrwds2A2YwCzVZStxUFUijdde+9odnlO/tsukk6xReLprV8H99zr9E0ZDrXqRegKOG1S7EIx2YFGvdMt1ntmIfLAF6TVQpX3oRaMG3v1i9JFp2tG8dARLwxdGUS1IISE4FBeJrjK9WJ956vi1orN9Ll4MF17HxL3dE73vPWNZrnU3w1RsxHF/U3ZXL8RHWjCp7vE8bJ02dyVKLSjNAE+7pvR+1IDjyQYT61v9EslLG+2o0blKdulD2yhfXhudDBVe/OynIb6WL963/LB+77lg/d9y5O8pVK86oQCc07pRyveuNcGfhThxxMLp2UochAM9Eu94sXlybX2bYUl+PmyFehDeZIXEbY5YZMc9/KocOF1vP1OvDepe2rV4by825ThIj/eLtlJ67gb5+aNFGzWn8mLZv/EZqoD3gQuAB+VPjdvpOASSfI2y+UEk4lLL1vehKRLyZWW6LcUb19ilnHlFX7pmbvS8fGTvEcdSHd/f/YreFHBkXrjXjbkcNumOM0evIF4/tCeU6UarUh7/WPe1v5dI15VbkYq77Uf4U13oF2Mhn4xrid19it4UcGRemV9ZjE12NrRlSAXad50qdbOXi8Pedv46VZXzRh7W7pxiveRDrRi3vTZL+ato4JRvfW4l3j16r1uPR5se5QUb2//YVH2FRPJGC3Fe0kOB207UWH5BG+6A2adpJqS+K0L2a1+qt7n8WIzjVL8SzHqrMx6W/IKNqTplMulNC+WIl35ca9hgs1LzWGhiwPe+LOEYA31RrmPDXSOeQ86IBsulcu9mLcYG1GD7OfSl/Di9evAv2Lcy+7WULDCnnxb3Oppz9uVBwvR4oYU8DBmeX/JUrwptysn+vb+l0Pegw50tuf3ZK3NHWYnruaFvNuhWy7vr1+rCCItRr7t7wtveVskPQvHHuYR3tSSfX9n4D2pqkPegw5InWDpqFZ8rePRYv3wQj6Tdzvzxr0kKSnUd2ApXpLmTUyxh7yyg8nGS7ujEeEh70EH4ma3tZZSR1/DG1VR3vaytb28Up6nX2l5zYJ5eYJ3b5CFaJj3d0d7J3kPOnCg3/5Ov8X9beFTvKckQkAF73vZJfF+C3OnOdm7dop3N35lINCL+3Rq/EYDP7q13cJ5/DnjN9GB3eWK7AJPitYCjxX4TF6sqZzqrFwLLZHepRk54l7bjGa9Rto/t5uRf97Oyd3oXHmwX946EzkOW6VSZPRlWUOnX0j65165L3k65b550IHIPzdlcLb1L7ic2+x0Lg6DrC0v/TFvFC9utSIdf+8Cr2sr1qeU+r69cjoHkCqsd7v1eEw104PLTE7hF+n5t7+rKZr5sO50B47mX/zZuejFZ7+GN5ItbyK8aSd6W79M8Zq7gAOCoG2Z1kWE2dl2LgbeXzNpqOkIacu5u0oHHUgGeOn46ii7eBXvPnyNRogp9VaUA62YjJ9b+1Kyi/ULs1mXvWhjBclbog15dVrbxCodActItdWMQDr9ow40sQO98q5/27OPU4aneB+VdHpSiN+1D9e3E6XMOGOJf7TLhzljMx0bJDOc7bmFfRqU7MDuZtM+UDudH72e958k3WgLhzTrwwF7IO+BV8584NzrJDnJnRa9UnvzvI29dz6xGJSW98BbKMfuul56Cvd98MLQbSTXjX8g74T32fLB+77lg/d9ywfv+5YP3vctH7zvWz5437d88L5v+eB93/LB+77lg/d9ywfv+5YP3vctyftlpfKTtyPetpjtX5Pf/6waSrdxjm9F/CnS7P9iWWDOSV5NqVV++/X9qdks//qbBaLL4bvjVTWlWqvouv6v96TmZuMXy4popXo1NealqOAIWNetd6HmrWKt6L8dkrhG5K6QF0YwANcqMfK/fm2/YWbwTv+ykrCVGuDC6N3xIjD+1x6g48qW+Zf+mzRt6Z2SrEBbBVpth4u8Ehj/a9qq1HKErL81D3ZgxAhbk7CKFuPuePGbqI0IOcVs/fJWPNjOO1kHrAhrqHtcUsD/9uJx5Deg5scVm4SNceU+4h0xIJ9SM3iwnw31mBx5pxQrwqZo433TMfGWWUuO5n+uBzvlnbYjVkuy7mm3vAnkHfORmv9Jpr034sdG7I41AZvkPVbzlrn2T/Ngp7xT7ZQRH7Ae8Z4y7X+YB3vaOz3OepL3UTWnPFjjp3iwduOZ3ukR2Ed4n1Dzz/Fgj3un5yn2CV7yHA92rlD7OCh+pnd6Ee+xmvce7IxqPq3YFxnx83mfo+YcPdgLvNNzYJ/Fm2T+kQfLXM3Nv++dXst7zHxCzWDamanZTBvxi6edDHjJuTxYht7pb/ImmXPyYNl6pwx4SX4eLHvvlA1vkjkzD/bjlP3vK/Zv8h4zn/Jgz1Tz3w2Kz8R7gPw6D/YM75QZ7N/nRTll2s8MtX+UsmdoxAnJgJe8brEAFPu6lP1vSTa8KE97sMRiwZm807Fkx4vyrInqjN7pWLLlJc9Qs/4D1pxhSQ68KIdqPvJgx94pd8XGkgsv+bEHi+UM3ulY8uJFedS0Uc5pxAnJkxfllJq3cjYjTkjevOSEmiM5s2JjOQMvSpIZqdWs48Tnypl4ScKD0ZRzOicsOScvCj2QszYu5f8ARDmM2/k2LlcAAAAASUVORK5CYII="></img>
		     <span id="college_name"><a target="_blank" href="https://www.cnmckolkata.com/">Calcutta National Medical College</a>
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
		    <p> The Calcutta National Medical College has its origin in the National Medical Institute or "Jatiya Ayurbigyan Vidyalaya" in 1921, founded as a product of the Non-cooperation movement. It was inaugurated by Netaji Subhas Chandra Bose. The College is locally known as Chittaranjan Hospital. Established in 1948, the institute was nationalized in 1967. The college is accredited by the Medical Council of India (MCI). It was affiliated with the University of Calcutta till 2003. It is currently affiliated to the West Bengal University of Health Sciences.<br><br>
	    	    <span style="float:right;">Calcutta National Medical College<br>
                 32 Gorachand Road, Beniapukur<br>
		        Kolkata-700014<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href=" https://www.cnmckolkata.com/about-us.php">Read more</a>
		    </p>
		</div>
		
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Pre Clinical</li>
		            <li id="pg" onclick="pg();">Para Clinical</li>
		            <li id="bed" onclick="bed();">Clinical</li>
		            <li id="phd" onclick="phd();">Medical Education Unit</li>
		            <li id="coc" onclick="coc();">Central Research Lab</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Anatomy</h1>
    		    <p>
    		          <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/department.php">Read more</a>
    		    </p>
    		    
				<h1 class="course_name">Department of Bio - Chemistry</h1>
    		    <p>
    		          <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/bio-chemistry.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Physiology</h1>
    		    <p>
    		          <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/physiology.php">Read more</a>
    		    </p>
				
				
            </div>
			
			
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Department of Pathology</h1>
    		    <p> 
				   <br>
    				   <a target="_blank" href="https://www.cnmckolkata.com/pathology.php">Read more</a>
    		    </p>
    		   
				<h1 class="course_name">Department of Pharmacology</h1>
    		    <p> 
				   <br>
    				   <a target="_blank" href="https://www.cnmckolkata.com/pharmacology.php">Read more</a>
    		    </p>
    		   
			   <h1 class="course_name">Department of Microbiology</h1>
    		    <p> 
				   <br>
    				   <a target="_blank" href="https://www.cnmckolkata.com/microbiology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Community-Medicine</h1>
    		    <p> 
				   <br>
    				   <a target="_blank" href="https://www.cnmckolkata.com/community-medicine.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Community-Medicine</h1>
    		    <p> 
				   <br>
    				   <a target="_blank" href="https://www.cnmckolkata.com/community-medicine.php">Read more</a>
    		    </p><h1 class="course_name">Department of F.S.M.</h1>
    		    <p> 
				   <br>
    				   <a target="_blank" href="https://www.cnmckolkata.com/f-s-m.php">Read more</a>
    		    </p>
            </div>
			
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Department of General Medicine</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/general-medicine.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of General Surgery</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/general-surgery.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of GYANAE.OBST</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/gyanae-obst.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Anesthaeology</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/anesthaeology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Paediatrics Medicine</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/paediatrics-medicine.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Ophthalmology</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/ophthalmology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">More Courses</h1>
    		    <p>
    		       <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/department.php">Read more</a>
    		    </p>
				
            </div>
			
			
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">Workshop</h1>
    		    <p>
    		        <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/meu-workshop.php">Read more</a>
    		    </p>
				
              </div>
  
			
			<div class="course_type" id="coc_block" style="display : none;">
                <h1 class="course_name">Central Research Lab</h1>
    		    <p>
    		        <br>
    		        <a target="_blank" href="https://www.cnmckolkata.com/central-research-lab.php">Read more</a>
    		    </p>
				
              </div>
			
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://www.cnmckolkata.com/students-corner.php">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name"></h1>
                <p>Notice for admission:
                    <br>

                    <a target="_blank" https://www.cnmckolkata.com/students-corner.php">Read more</a>
                </p>
            </div>
            
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '10'";
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
					$sql1 = "SELECT * FROM colleges where id = '10'";
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