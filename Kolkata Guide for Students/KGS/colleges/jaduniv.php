<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Jadavpur University</title>
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
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1531632262php3PNz6z.png"></img>
		     <img class="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALoAAAC6CAMAAAAu0KfDAAAAjVBMVEX///+vBgauAACtAACqAACxAAD9+Pj//Pz68PD78/P57Oz35ubnvr60AAD14uK0GRny19e0FBTvzMy4LCznubm2IyPirKzz3NzrxcW7MjLNcnLdnJzBRkbisLDCWFjv0dHfpKTHYWHPe3vCTU25NzfVjY3JaWnRgoLGVVXTkpLdlpbCPz+4PDzai4vMXl7o/fuaAAAgAElEQVR4nO19iZbays4uVJVnt+cJD3jCNg10v//jXanKBhubpDvZyT7/ulvrnJ0EjJFVKunTVOx2/9F/9B/9f0txpf/bLPwaaZHEGu3f5uJXKB4o2ZN369/m49sUVzml+z2lxyxw/g+pjZM1rQSMI1ES5sdmqJL/A/wH/c3fE0L2ExFCCXHDQ97J/zZvPyK5kxid8/3gn1BmB3iNImuapmra/9aD6J9szfWDqG3udmXVn/P8mtcfiWMg+1qs/lUmNWP2D8WIY/y3PGzIe8F7LUd7RicK664qouGa/lUTWhwvo6yM4L2pz209eLvE/zHne2IPLp39E/nHJ4n+Iud6z6S2M83o45iHkpDhob79hHMgaesSYv9F1r0DedDEwFxbKFkS3eB4dnX799Q9IoLZDY4IqgGRXDv0DwcfKAxDG6SNr75cFeoHf0nfvdu2FJE/93ZMu/esigIzSUygICiiKnvv0uMtJK/4p1JT/g3Oi3ZL2pQRv38PzNLaFqBmlUlQpQcCln/r46fqj1v6uLFXnAPf0mdVxrrykw8rulVGtbTFPQj+D2O1yn9acvST0jlQ5QfblhldwGKe2zzP2/NnP2SBN1sKWUs+kfsnCRDa/kmlsc5P/pJQyf80J55U3RxamzIgOid8gfh15uiT/1eC+iA9y566yR/j3HnSFULt+uIIXqyyaE6gyA9+KLcq0ydwddhb2yUTCHa6o/vEPD3Ef4jz+ECXjEtNIPhwgvczd/HidS5oIgmiYgnI9FbYV6bQaqNI90vmWf1nOFdSsmB83yTclajR0O4Fb5xn6fqZdpWZeGXpJfB/M3pv+qtLxxUB9sNjF/CtoZfNUm3on1GZ5DBD4ZSkMddbp2ltgsEcagS9plFs6KrGN63XHI/HTEOcq+qGFQy5xLhlh+vD9oOLXnb6mY7t6fmPsF5JD6e//+TYUfbOhPMC/7dPjTm/XEWe4HnquZePP/KQPyX8T6odLnrnPIMT4R+xkO/3+9s1X1c9OHALDbpz6yvj6fKGkfySmFn6FNupUZrbaBpBc84efzNqJ96JW4Ch+sdRwTsddaWNNM74mW9LSk9N5Txdq8QFrEWTeF7plKDvy+eyouFGxGdrExdFv5xGrSFp0qVDlDwL4tdIK967d9CFjN+cSu9owZSol3jQT/KoXEupPKN2ATschh3CTFHMuauVywJVDW15imqmlKkQPBFG1a2jn3nmL1ByhG1I/TQYkFN24CyUPbfJlLbBpnwcHy4mb2gZGe7faufZzdJoG8kn395wa3xDLUQWYbKibvq7jKsAWbhJI7aN2zFFTpUs5HaC5d4r2Rg5pYOuaUaS2kQatF0Fql9lfbGL7xtRcT7FHg8z/Gd8nbtqQvvf4zw50ZlZoX6F35gcGH6he/bGq2R9jfoyRvFiNbgS4qNOdBwQhFnNRp5kVVXMXAihLRVMKLhz3snwG4zLlTTzn6AdyKt+wR1GpWM08qt6nX9ZSb9iDCQcncCrkgMYJP1E0DRJdkhYjDmNuLmGpz4aQB9R5TOwNUpxmseu9q/ru9KRhRS4TpY9rAOofDTquGo2EmPn1U4NGA3MK6N51dJTuZN7hsyAHhHyDhwFQ8twGWibVVfcFzRFK1XOYwF6Mp/v+kVyFskJUNi7XAhpRmuoFD3uhY3o0gPWB/C51i6lN2eX2BwoRAPYQ1gt68jAsKdZLzE/cFK+5VtkNO7nvN++jwv0S3XpT0vOMfGmfLiomWEx6op3tkF08NLbJuvVHramnNLc2ukhImF2biiHKeBqQQAnR45rdlDlwMWbgAmFr25muICEl++yrvqI9eZ6t0cjILccrNSTPazAmdp5kdA9C55vEQPrccjBJF8T9eLoQxgc8DnAANXcLr7B5vESZDjluzVVefZvjpXCD0v+lsqfniKKfQUvWgfQVyosGabgdCO/Nd7OksByr2ATsF7s6jy/wbocpxdlk1IU7S5w6aFKfcr6yVRmITwkOyMwyObpGsKY+/kdYLNkndrIeXnDRW5H+ZY3lu0sCMn0Kw0h6nuWjPW2BwvjxGV03n+IV5KoBhvO9aWhYH+UJAVVz8Y1DHLkvUVTkC2DSMKyr3OuHeafJZxz74bK0k8usQeEiwquptTtMnelMXIy4ZDY5G6sq23wrJRrW2nTK/+eArxnXYzC6EFFaV6ueWffsDRJOF8yt1LQOXFneoeBCaAD0FT5fQ/6YLU/j2/AFjbBnrzjY+FmDaoqCgLQeWqLVYEdigqfg/FS3hdBN/uGwgwL24K73AP9I2z0b+VH/Xl2KUquAKz9ealtcvhZGuWDUvsqHKsFe8Ow93vX5eiCjWKHR0LeDxZmjefBE/t6Yi+eOQZKUSYO3tMVlkpOYeFdNECAqqyax8tgSFY25pms4QRGHffEJ5O8gMchaGdaYLUYtytaF7oHpdSamc4w78d3ntF8i1NEcA7oPg0r8W7AyC2LcMsS39gZA5GOQ9cMz5B9i/mG8A13oCnoDLH7DpBvHiNYY7lIwlxchEqwH/R6Jr4vo5mF0I8qvoAOoxqNyAGsXVGxvLtxhCRXhWdulLlUK0Yy5hBBi/h1JYQmsM1h96fURm3RIWo5CN4zsMS0hsss/84FOXyxiqZkM5njptFrANb2xLmGuiNJtFEqV6iu3IXTTuPkBFk3NP2xPQMd+2boNip4VuEzHwAxr2lgVYFeudeXL+AmCKDkXXJfe0o+nj++TZZ9Z51g6UoZUCu76e2S8oQtbt6aMfR/Kvw5GRg9SttTKHIxPHjmf7H9Wzs8K2x8hCjERz2zQixvcIAp6jqEVPC36AG47Z/uJCTloWREQtWEIAHsmniv6g2d0l7vaYjyvvLIY2el3Ggq6uXAM164w+aFASr+KwGgmXuuErYtfoH1Rvd9/EnHxJ3S4DMH3MzQ+er/lEr2sIu9xqW8J6NQLxTs4wVgY8paVQNN1g190mXD/BxTuKIOIKJS3w9diVsSWHbK3obyoTpyxxA/YFKtgcVLCZUEUgThEdfBFOcjC/iVfoPzQ+hhjMAFXNxRFzIHFoRkvHdTHtw328/rgZs1B0vrPLFBiX9ueHGAVweCIsrem3M4pb6kY3GPZuMuRlsLj9lXZqmCtF2uVfw7W1gg03/EaF/wqPv7k6JzBy9B6U1s/kpCT30addaUCKa93BDetLJcJDawPBZ48bOEtNgLGn98NqmO5pvWOPKUjHSoVEACB353843sGXqRD/JQmZ/iR/3uCihqSWFDECqqg4VNJRtjF7GbOjZ80kNhgdCrXOKBDjtksfHKq2pW0rwxjm3d42zXQfxEffSp6S6CHdFypc7QpsFF2t1CUvrTqofySEQBU84VRNXw5wWcSgI0XJRbRKVi9p7vXutKOEPSufzJ3RU5CkUOYN8/BA/oGYJGKpUOrovAZ1ozqql333lfcKljVE4IBLVayvb0zBFEIIEiJozUPXhqdCNGk7ewptpFJEtPX6ynJLXIAUjR4zlNZvfmzvBZCt6Qxxs7p4XbokFOJ7Gznwd7PRvVBZ7eBHlKQtE7EhZgWGDngud74wuOGu2IcMdvvmK8RuabPVev5r5dfRfjj0+8OQZeXD8jF4y+h0511IIvIF+HZ7xJiJoGsfqEFrUqUHYhzYsIBMOuo8gK3J5USr8V/spFzbXmOKmAewQpFIz2RgAMUxeVSYbolYKrVapxp34FgyU1IlE06Rmoi4APhoCdbzQ8wU5qsvE2HVZoaBh9t9ps8HCOnsbugKTCEAFCxw5s1v7Qiq+EfSUFwgJx1r+UQQVwgs5Sd8Fo8WVS6htXkeSNAmiXJ5+I2Q7Crr/QYaTEmFabYPRO3kU2c5sjqNE5VkdBVCA4fzfl9Yn0UwujldknsIyGEXYIHbiJrvYkM1Cb4zNx71di+oTsv4iMVvRJZsHLrnM/C3Bbe/4s1Sd+q3zlEYGAv5T8DMVo2RvDkiYtEWKIjcLXzI9T/mG5moqbqghpvoSLNumC1pwMQpiGaoJlvPE19ohU4Z8AHYmr8B2LcZ/6Q7GrY2xC8xEwihtXEvvQDzScWxGNa8svpKceFJzAj+4vI0eAE3tnpzmOBoj0iIqNJR3EZ1qOodM57bYT4pyUKarCDFUJkYRw+lZLiQ5QmM4zi8g5PXzdJG59nXnAFOoUCFSZvjPTW5sGjvAcOxNcea4j6hMFA6l/ua0+Js6vGgYchIj0fICYN37Dktad1Qo5f/vdmlWCqjBhcUUGuOUCftzro9jBpxK3Ai0lk5tsXiiNOkF7Cs8c54AieNJFhb9dVUsiISxbeOCLZmII6f5+bTnBnS5NsgTnfQIgwxxLEpYNEBTt1YdLJfTFMmcjXuDphIAK/IVuGuOEK6FX+eN85iYnxkSY/090I0Rc70ZZljcaJhk8jdOItLcMvgsXxZgApMg8rWmKpmkn7zSA7aP/GmzX5WlPNklZTYlwt79PCoSilAxC3a0aouyQQRhWEsLlC3pJwVTI90CfbYrdHGNS4po88UIP4nXNDIIMESQbHYhSIfb7h7pFF2JwokLPqsI+dYQnUQD0goEGiRV37LtVHbu3ANAj6AuAzjEpVaGbV+KgD4W1FREZXdcxfpGcnIqvnEiuXApOUXjPAd4EScZTJpGcNkDHvU2RB//oDfiG9EJXcKypY7FL4Wn9rxmX6guYKbLHDIAg88y7mq628IaABgBOqc20Ue1idQPt/iauXsKmQBYiR6kt5p4swSx7tfiw/EJ5AtZueZGnUA3sB3kbddhBVd/nD/6uEJvAPYJ7kLrWmGhK2BD8NmxN4OYJ3RFvkapKa/xGWLunSoB1/txUH/VEN4QEpmy5FjpsMtqLu0O05x4r8RQ8xI0YBzLelPEnq7RGcW/TIT1IEeDLlV8CAWmO1WrKSC50BLON7uK75YFt97Fk+7km3Klkx6VXrFADhfkqaD1CaE24VOuNoEXUp/IY2S/7aNXu3hpFMKMJxoYK+PIOjscz31vC2FU0sLQgomGhIJ5E6FZ6Xa3JZv6kp+5yLTCkGe+g3VMdFeW5VbUGuSmzvpDlHfX0kRHmuZsOFJw/nNEzNJGK7lyuDZcGpgjCpYwx4yNtsG6GCNBWhliBJW2Xu7xgi40fw3dbNyE9BTUm4d872Zj5HYtHlhF26Q43zpgA9CAGzi/8pkIXFQ7iF/vMQCfMNtqheRcKXXkuLJk8rZuBBvK+/yrbjnboqrjJxDVtQPPv3c50vmT6I0G2p588Kc3zxLixeebfTsux/RI7kf1lgMsBBm1XnFs8MqPnZ7TH0/90uVMLcKm38UIwGNQvenqmPFpAMHWDP+s764s7Xh6lG6yWBeHYWyB3LBS7lB4qES9hAnIhMYV7C+KvDL0n1pI8mXb9SNaP6uQAVvjCWUpywNBa6ksmoYy0gXKH2jxS1uaMAf1R9mIlL6AJP6Sf2buTFEMOoRgvC+oY1C1LgQFP3EwpsvkbQhzPzSGVyAwuS1syeE2C+ajomMFq3Wp2ijXKOJQHHIPbunqk5U5D9fj0x13qVN4pHR13ouWCzUoK1ThD2I+3cWA9njrLxpIZaZ44V0YgSt4WL6sjgH0qsuDuR4vts72X0lQ3nZ1ic8C7C2wigYP3Hh0nZAxFOEVTfgxb+I2ekhO3USWzo962TT0fm1NMutLq0eDS+smjyt0oDrZQ9njMJD/BVws714AfmzEzxcdSncinPDgAb4Ry0Wa2ZN6GWk2s4y51rmC9+MsXhq2u1O5Dl29NRAtPpWP1OEq9fbKCD9YXEclUqOKWbEYA/ug78Nl+eC2VCG8D3lP8KAT1XC6PURCyn1nny531ge8v4SCUT9CcJse2xJCLDvtxnuqv2pjhWTlopZpYX2C9yS0Sf3k5eF6RKcXNMLYxE2FyYX+hXB6J/8X2+ZhYx4sTsE48u6K4FGTsYY0q55dhRmqputwh8dsdn41gKVaYPol3LKLj8s6J7yL+9Gbons5902XvLS8IYQSPXqZ5WMG50bpvU3wVFZpvA126Njpv4xpbADw2PcSDLpwVuu7U4ukOkOATALNysvp6JCzk89dUzytjQwOrEIvC30VA3csjXz3fVo9UsMXdsrixYvGqp/Xpj11YmIR8tiQyz95Tf6NyihiGvD8DYm4q1i4MI8rtZG7l8pzSw5QsFv5zwmWSsZPBgb/ITaZbTTt6SGdR/ZyUM6Xduo4CPBBplU3Ae2ebRRf0kNmsSkCv88vurENoxM3IduEGs4DrDIZ6ptI6OyCrhgHbvFO11b18QtdMgj7Q7XjXw+th8e+sL6KF+h4iGeg0CNnkfIfZ67V4jYy4TZY4DzCqxl7R4UgDiLdtMtObwhScLvAKF6S40aLH8+kbZJ14xVm+s77wz/fozjcw1bcyIyO9gYFZse4csYMKQpEmK4LES4Ioa/I9G2eQyDQpyEuRRXfkMxpESp8FXIoodIPUEf/ODfiDJpdEr/pOh2Xeb7OOdbUV6+PoCeaH3fBwOoT71eQUFhdt/3Tw3emtdVMUsv65WWPQgHWML+6mJHv6nGA9B9YhHHW3boHPvW6SsOZgfzGWtyD69NYqjxXfK27PJCPrKgpuZH2J9EL6YP1MXw0jbrHuuZus/oyegQDuwhdzhEou2ginLt0nG1pNifUfsk43WNftX2P98Hyfl1Lf5aPUx48+GTmtF04xF7r+LJKRYH+tXU/NfsTiK2LPrs16qeuc9ZmuP6evDExsc6Hq9cttCqZkvU2t8MfjpNtCl56jKu+lhdGWFoaX0ZcXmIgiQmEctwL8HVayt9xm6b8aBxfTp1tvYFpoScVL1g2068pOGUMXtmH90UHbBgaDlG6zjvmSDY+PbXePnp05helwk55HfrGHae030ZsOm940PhCE8joT0qhXUbDiYdoEMUz3EgiA02WbBYHoGNruXpJE72IY+ofTrT323AAHR3wFXzrd8rY9H+v+Y+Mm2NCwjWFKn2MYB1mnfbG+JuChNbWw5+IpKLtTJyqZGyQHUVVlVVVFUREEpgm49X4LueBtPV7pWIb+soR4vqfFnykJOXIseL5n4+FE1oRXDQL6qiBvsu3cPCe19MRE8khFMn2NkeA/gfBl88VoCrZSbpcyI5vnG7JXqaqxNQ8f3IQoaXu236KvR+eNGjAADoFP5PofnEm5a3141QVl4ppzqreKKjH2mmxXpy4icY7DRWACV9coI4rByC6xxwBvReh+2PaKAzZ/3qNEOjUfH/1NenqH5ht1hcAltN0uCQ6igCuA+ZiWm9FUGcCQsTytM7eqihLU+pfKnm44JtHmuMY0W0o3kLEhQY+feWsoPRtTRoBMZaEHa1OgfuBqT57iL8vn2Qwloi/mKrVN8/2CNsQr11T08Og1e3uqHMBbgNCVEXCgndxmXRId2Lf7o5cFqGZGRXq3BMQeblmf8jto4DnhuuPt8SK5HANCPkTzRlqs+GOqd4R5K+M/5dN4XJ0R3g/DybvRNpEB4fCOQQs0el9tsG59i/V1zTWTqPClaMTgKfr3+7hhYPM0ZzF2MdLnKVBtmIFh7OKYaqSACojPB3nx6xQIucnmcBz7BpBZS91AfcHKodIACsGMG/HPH0KtANTiyTLTOABtnjFaMQUbPV+9KWfhncg0lcs74TA6Xy/37hGYf4Xzsf1wRia8yM2eHFLJ8j5tDhhCTwiVHLRHfn1d4kmkxz7F+s1og4KQXgeX3JqQ8mYHbAl6qmqMcjuRtXVcE5oc++P587ytkRs1g1Es1qgpuJk8Q622WoqWYcw8bbHujSl2jmqbcc8IVTeqIQb4IjIw2Gty2nIdcZMffNt9JnRCAGCQDic8zaEe1s0F5X7qMssYOQ1RiTVsX+SCIArDCn9wr0ivMNo9A4vFPcw3CX+KpekPfaeYLRGlTQs0aDtfojmeOJxkSQknz/NwOr904q0yd4OtffxvgGQIY34AHuQmGIhE7ie7n8f1bBxxo4yamPK+yGldYpvaddNjv9AbZ7hBMPDPnrKAQyxjVg0iAhaCR7RSJvwHKC+mVuR7spSu5qseVfijjP0lY8mXd9uMXlGEsxpWsX5zAveJsH4nemIURt1BPYO0bky4XP2Nz/uWk6rv10Xku2HnBgQQDRHKXmG/J7FvxyYf88qYN//OfNZPKcNitfg2OcORWT6nMNb4MHdbYkvxVDbdr5DhfSyG4sCWBh/lGqMdGTnUQ6TtlIGKsE/JUWX+uVn/GHcPt7w77VPCEylKyfaPo15cwcKrPIU7sr52Z+ZjHgX72jCNhBtK6wbulfWiAbckBIHNZvRVA9m3iffyCJuFLUl2Z+yUIJgG+AzYpGAUrOtdX27PoYR2z7DvefXOZCNE5LMYRlbvuVfi18od4ccs/COEI0Lgu7mlT8A6EOk414gPRiSPT/xNgl1VT4r5AFilYCX1Xu3Rh9ueUvYWTsk+jKi2jfv3CSeX6ZGrH0LEM44THh+3hoj6COHyQ7ArwKxcZ/lADAWU7B7l6ZjjtFsIZ+XdOM6A4x+0/d0uRyQAimKcZYf7nzYZn2WSmlG0BY4ACKs26cRz6mmnVvVskirhAddoURLmtuPJC9nkjLC7mb3u9fwyGXu0LkL3nDeaByikNqSMj1rtlKMoBGezgaPzWmJydOcdy5SIely+cGXDB++12FF6NpWJB+yi+u2D9WJM7BAxaKacmZ30lB5jo+iad9FdAWqL7y6ORtiSWHGvM2FLkBlOjbFiyqQ554NpUyEOEZqw4fd4d7AjZLJVESND4YOUcYHFSzi5iXgymAmdPQdRgq7zbkJsTz/cr7KwS5MOoI5j6Gccsf2m+R2dcbC4Tkchyj5rqxwPNHuc2YDdOOi3j7PRuijYOBgF7jXNvBGiPlaLU8YdXPgBRmAsh+AwC9z51w9ycXyc0DqKG2hRJ2URYcHZnTqreTcyNvGas76RV178YYO4CYIAyZ4ubVgbJwd6AkGNu2oX8wHfdV7ka6QUFKfAxuOGjBogi9rx+FlORhucEJ6ZkB8HOqx6KB4UT5PsBFsfsHWpH6OplB2TuBBnMB3HFbPwnvQt+BW/ql/4NFMvT3ciNOYdvKfepyL3r+VwiTFlFIW6vO70V6bRZDEChtnqUcTYwuMGKYOAez90I6jkjT2gVd+HwB4f75HGbW7xaYxeNbC9EvRybHOgHOCqM3f0I3M8TdLs+Q61QOwHcfdPDAEa42RXpVfTqYFEfcdBd9JuZF9/RGqH53HQcDxMMD6K6dtG1yubkaOYa1ABM+WGQEwjT/sfgo/7RDhPReF8Dd+V8HnKwLvqugLIkdHD6BeUAkfbiX38juCDm8QnyMbVd8D5HzI8oAfgo25Zk4pSvqu0WS/J8Yc24X4lwZ4xrIghHMAei0Yc7yYbanwlj8p6fOT6T9Ofnog4PmzSigC7f/TbE1xjYBUrWRMBKuNI+N5ktNVetiRvGpMUq2VDEK3DJqUCJmuXN8by4bqndjCxevHFPGBT/tzIG8mZnx0gtdPaJycq2RRVEPwPvfeVQVjNdVZ/oJdVT8iKzHZMH/K6fCdh1iTp3gvRW0qIRJldX7G3b7IsSWpTMQNbOD9yr7oX8YlaMCPv09IHPqDF6Aj/iXedC7ZW8I5+lPfFzgzjCu2uKe7GQ6cQKBuwvI9uaC1lQwLff7viqtz1WzOPgiV6a16dnG0F733Ir2JvnfNIyoG25EoMnq61lOiciwlKBdupsDv7gcXZl7aTHINa4HO2Mt+g5D5+JA+sTXaGOAEsHe5n3Ox0PPZIjB8fjmkXmaUlKwowqBqOV2Qfad+G/IgywqQPy5hGgaOQ7kPCHDSPgLt2xjimiHoqGbxzc9Rzmn4RYisKDjWLpqgOrMx1SvOVNnXbS4pn2STFifqPjTOe1MeTfBKWL3xBIdbHyPQWtS+q+QmugSsWmCe/CTnw14+E3uWq4wyUyY8U2IssvZt93e9h2/G4p7E+lU+fRAbRBqcCPdHce9xTzc4HdzN9R/cirVAHvAk3PHUarIcSuacq3NcfrFXRiI2uCAeqRd87r/4TNz9evoPy1Fw0GeO5Ey0OzE7aqWY47ojLga2ToCCLcz68aqgP49Gf8zQj3Z/6gQ+yeyFNAx1NjZTtAuvK8trFKB/3pcSLj2oPf8V07nhq1aoC8xPSRTabu14Hhx7uKwagyOWnUb0T2qJROC3xs5EU1dCf8wOvhYWHa14371XhjToXsTd1Z1W4eOhhJOriBumdmoYXXtxTGzBq+JYlTjKm3w0K9DEEJ70ijou7H30GUIEPK8Zg6BwcUaKpVz2nvC3PsfA0REwyxob68FbawFzn0kq8xATqHO0hdsh9evOpUEr5Yz/ahRGT0I2I7ses35E7OoLAfpjI89gX50ngI2TYzpKXSrdhznxVt3lbb/o+BVO54Br2fSh65NHzezyFLypvHeoYcj7VKoj9zfHKSepjpxOm7kecfhkfIaHMkzPg3NBwLlR6WK+c933RzfBPy7AUefjIfOR2TGQhXBkbtBs8JMERjzD5om/OtD4cMJgZhZcICF0cl1eG4rBGhEgV7Fg2uSiTEbe/fKTnxUrLumHFsZVhk3FjFKDjEPiPzTX6kKadmNLEc1eQ1eoRSbNvntKnPs74Iz5i2uKAFmsmRy3DI+x5VkBDGdkjhMVqkB+oquoVeJCJbMRlYgZRl55P9ts1PmMp3DjRW2R1lHWLL8VxF3rAwKx4HMnzqunhJcndIwqnOECtBDiD3k1HG8PdNMCA/CSQII1q4k6diwUGNXndCxqyuj3hyfh4xB02AhmDS1tTYgmERsJl3glfID5W7oIZ568aN19TnD8+LdbQBE8xnnVhibzgkfKDtXLmuvQ0iWYgeBAMGw+mPh1xypzs2dvhnPMEsXqkdn2gzQXB7zwNV6KL46mfZNHX9KJd9geUzJ6cg/edg2d1nPihjqfrTnW0lh/yxMfkpoFO3sZqg6p/pHUOdmkIwEFcKTUVvQc0ZFv83JC25/k5G7Hz9Dk8SkSMPJvLjiz6/Vy+OfvFBn74x2jOVEEAAAVhSURBVE6/4RcCUFfP1BnY2zjbdoF9eXt87kaxhKaWidXAFofVu8o2+7AkhueTIacQiX50bdubu2CYjiXGZBshfGwnWnYf8v6A71IwuwfhAEjv0Uh+GLuOflaAV0WoZEm0ne3fG705+iBx5bYL/cgOhU37Mz0XHzbBxXHoalipRDW3+WGX1bL5kJy+MPe5pnnmGry/hggGodHRNE4EXODY+YtQeMH62UspI28SH4yuTi7uPhJ6u4stUoE9W57FIGcnzE8VGpqH/VLmp188qaCapykJ5mRkBAXU/yhckOoUcXnhvPXwRmtYkQtggB5Zl60YgpPatlNwoITncGKXzU+qLnsJAB4vu6npsgWFXX+1Vqg1dM77jbuNM7gNcvvImvsvSigdm1mKG+0rht3x5Q27JOK0vdkhnpePh7KL5S/T9M66kh0wl8Gzl5jWmCsLW03BfZ28heJRkccL+C+CnGfQAhzN/e/yjTYBkaILGp4wETEcTZ2rf4sq+tyII6ObJuIACyVanqoP+Ok3Msl6v7RTe6wNQoSHsEBqnLuv8B66q53A0Z9HFwQK7pywr5Ht8dBvpT8uskBa2eIhBT73dEa3VBaICn7nV06UbsE6KjyuuGL24GeY9O6tHZ3hA6IsmzbvuxvFYxIKPxyqLuToTVmMuZqNxIEb34nJednIBD7h96om70vWERVwIKMXeFgwhJarZKnc4KEvmuPoSk997sDgAZWyecq66RUe8QuKx9Mk4pyexRf1vyNzZJ09N55RqRZj8pgfBJU4Xp4UUism91dR//H1y9+lMi5nF51wKI4vC87PP+pDpN+t9ngf6efVXTAPAZ5QQi17o3zIrU9eoAxvu5dAic427w5yRSZd/yRPak7WU2e/+gB9OFdEwt7GkC7j6RXK3vpS/5KUFFVPesIP/gmPvH6h6Bl51vIDRLYvenO/TyaeVDZnfjwzXivw7H3+q2Vp4Tk/VE9Fj73qc8/4byTcBpG0tKLD8w+D+ENpeNW3Ehg/JLXKp58D4OpDSR0JF1pGvSsiOunaZJFZro+5w5+9Car3Pue/2AYCTyMBf2JMDTxtz/YfOQJlQfGHy6dA39LM5zm6/fki3LTuFLX4GTkwdWGOZ34OXdddsuwCf3wMTVofb7Zob4cHrM3xx1icrl3/CM5mx+/vkqzrRqzrujymAmHZT+mYZ9f0oHcxuBiP/AQvJOE1kjQlkQiPlPzGmzaFWR/IfR0nLWfpb5rEn5B1L9ugjl/ux/XLQdqefHvs5X0Qwd8f9G+f3d0Sycbl8btDxD2HIlG29/95ZVnSrDKFOxa8imPczWMcZKAh/fHYtrkYEkjT4TL7pQzFcKKWzMY7aL/zmvbg5/V6Mu8fp+WR0ajh58xcFDUUzF04TmxZy59Q0Evz/fy2/JkqPixgJabzK1XM75Lz/Jt3yP2p77LgB1+vxGbVYTf7szEM/+rvPwbrpnRhXm5gXuABHntNUS3LC6Js6I+5vx4s/HEd949QIm39Lpzo/iV77CmdfgTP5rMOY8J69YlHUfnvkdGcVj/u9XiANW1fScntT9uULXKy+hXzXyPwC+0vFOn/ETKKZv+M5xfS/xHb2Hdc/EuMI2nJ8aXg6e3wkneQd1auTiL+yyRnrzReKix/+z1C+3g95/4vkCfOFn0u2uExlurjF1Fme5W+PNvwrxP2JxM+Hng6jNXSU17z352VP8QwAZr8kP+KKz7F7X/ml7h1hKqB6LGf+u3Le5H4/Wy7BxzGDwCxc5D7Yijr3yD9St3XIFuJPa+c0FlcXAn1/xfUXJD6uTWP+IJMn/5S6vbPkGKaX5ejXPyV34/9j/6j/+h/gv4fDAyBRCnKZVMAAAAASUVORK5CYII="></img>
		     <span id="college_name"><a target="_blank" href="http://jaduniv.edu.in/">Jadavpur University, Kolkata</a>
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
		        <li id="place" onclick="place();">Placement</li>
		        <li id="review" onclick="review();">Reviews</li>
		    </ul>
		</div>
		<div class="information" id="college_about">
		    <h1>About</h1>
		    <p>The University wishes to grow further as a diverse and socially responsible learning community, providing a high quality of scholarship and equal opportunity for all.
                <br>
                The University’s core values include a commitment to:<br>
                1. The highest standards of excellence in teaching, research, creative expression and service to the community;<br>
                2. Advanced learning as a humanising social practice rather than as a competitive exercise;<br>
                3. Regarding the production and dissemination of knowledge as inseparable goals;<br>
                4. Upholding the principle that the culture of reason and learning is indivisible from a concern for the world beyond the campus;<br>
                5. Maintaining principles of democratic governance and intellectual and institutional freedom;<br>
                6. Abiding by principles that do not discriminate on the basis of religion, race, caste, gender and economic status.<br><br>
                <span style="float:right;">Jadavpur University,<br>
                Gate 3,<br>
		        Kolkata - 700032<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG Courses</li>
		            <li id="pg" onclick="pg();">PG Courses</li>
		            <li id="bed" onclick="bed();">B. Ed</li>
		            <li id="phd" onclick="phd();">Ph. D. Programmes</li>
		            <li id="coc" onclick="coc();">Career Oriented Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Bengali</h1>
    		    <p>
    		       The Bengali Department in the Faculty of Arts, Jadavpur University, was established in 1956, which is highly acclaimed as a distinguished department of teaching and research, the reputation being enhanced by the fact that since its inception, the department has had as its teachers, some of the luminaries of Bengali literature, like AJIT DUTTA, Shankha Ghosh, Alokeranjan Dasgupta (Poets), Dr. Sushilkumar De, Dr. Suresh Chandra Moitra, Dr. Devipada Bhattacharya (Eminent scholars).<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Comparative Literature</h1>
    		    <p>
    		       The Department of Comparative Literature (Comp. Lit.) was started in the year 1956 and enjoys the reputation of a distinguished department to offer a subject which is distinct not only in India, but also in Asia. For the last two decades, the department has widened its sphere of learning to all-important Indian languages for comparative studies. It also exerts special emphases on African, Latin American and Australian Literature that are otherwise neglected in the taught programmes of the major departments of the Indian Universities.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Economics</h1>
    		    <p>
    		       The Department of Economics, established in the year 1956, is recognised nationwide for its importance in the teaching excellence and prospective research activities. Prof. Amartya Sen, the Welfare Economist and Nobel Laureate began his career both as a teacher and a research scholar in the Department of Economics, Jadavpur University. The teaching and research activities of the department in different fields have impressed the UGC. and consequently it has helped the department to set up a Centre for Regional Economic Studies under the Special Assistance Programme in 1987. In 2005 the Department of Economics became the 4th Centre of Advanced Studies (CAS) in Economics in India.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of English</h1>
    		    <p>
    		       The Department of English, Jadavpur University, founded in 1956, is the only Centre of Advanced Study in its discipline, a status awarded to it in 2004 by the University Grants Commission. In its long and distinguished history, it has attracted some of the best scholars and researchers in India. Past heads of department include Subodh Chandra Sengupta, Kitty Scoular Datta, and Sukanta Chaudhuri. Its chosen field of research for the CAS Programme is ‘Textuality and Culture’ (second phase: ‘Cultural Transactions’), and the work of its members has ranged from the Renaissance to the nineteenth and twentieth centuries, translation, the history of the book, literature and psychoanalysis, subaltern literatures and oratures, postcolonial literature, media, gender, travel, popular literature, creative writing and theatre studies, producing, in the past five years alone, over 80 academic books under imprints such as Permanent Black and Oxford University Press, and over 200 articles in refereed journals.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Film Studies</h1>
    		    <p>
    		       The Department of Film Studies at Jadavpur University, established in 1993, was the first of its kind in India. In a way this is a fair reflection of the strong film culture in this city. Satyajit Ray proposed the study of cinema as an academic subject when, in 1980, he visited the University to accept an honorary D.Lit. Jadavpur University has an enormous support base for a discipline like Film Studies. It has a considerable fund of expertise in the three faculties of Arts, Science and Engineering, and a very good infrastructural base. The strong cultural and intellectual tradition of Calcutta has also been of considerable importance in providing the right kind of atmosphere for the study of a frontier discipline.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of History</h1>
    		    <p>
    		       The Department that started its academic career with just one student in the undergraduate level, on the very first year of its coming into existence in 1956, has now developed into a prestigious faculty with excellent achievements in the fields of teaching and research. The Department can boast of a rich legacy of eminent faculty members such as Prof. Nemai Sadhan Bose and Prof. Sushobhan Sarkar.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of International Relations</h1>
    		    <p>
    		       The Department of International Relations was established in 1956 and is the only one of its kind in eastern India. The Department of International Relations is located at the main campus of the Jadavpur University and is housed in the ground, first and fourth floors of the PG Arts building. The Department imparts knowledge on the varied aspects of national and international politics giving primary emphasis on contemporary issues relating to political, strategic and economic matters. There are at present 19 faculty members. Faculty members of the department are engaged in teaching at the Undergraduate,Postgraduate and M.Phil. levels, as well as in research in different aspects of international relations. At present, five options are offered on Area Studies which are included as special papers in the Postgraduate course. The department promotes research in such areas as internal and external security concerns of India and South Asia, bilateral relations, foreign policy, problems of ethnicity, society and the role of military in South Asia, human rights, environmental issues and the concept of gender in international relations. The Department also has a Centre for Refugee Studies.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Library & Information Science</h1>
    		    <p>
    		       This Department was inducted to the Arts Faculty of Jadavpur University in the year 1964 and till 1984, it conducted only B. Lib. and Inf. Science Course of one-year duration from 1985 onwards, the Department started a full time Masters Degree course and B. Lib & Inf. Science is offered as an evening course of 1.5 years duration.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Philosophy</h1>
    		    <p>
    		       The Department of Philosophy, Jadavpur University. was established. in 1964. The renowned Prof. Gopinath Bhattacharya had been the first Head of the Department of Philosophy and under his guidance, the best scholars of the country were recruited as the faculty members of the department. As a result, from the very beginning this department has flourished.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physical Education</h1>
    		    <p>
    		       Jadavpur University born in 1955 has a short but glorious history. Having its origin from National Council of Education, Bengal, it has a chequered career where in the concept of indigenous system of education free from the clutches of British rulers and serving the interest of local people took shape and ultimately through various stages culminated in the development of the present University in 1955. NACC has accreditated Jadavpur University with "A" grade and has identified as one of the five Universities of the country as a centre of potential for excellence.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Sociology</h1>
    		    <p>
    		       The Department officially came into being in December 2001, though teaching Sociology started much earlier, in 1992, as a component of the Humanities course for students in the Faculty of Engineering and Technology. The Department started offering a two-year M Phil Programme in Sociology, the first of its kind in West Bengal, from July 2002. Since 2005 it started four Extra Departmental courses for under-graduate students of various departments of the arts faculty of the University. Department has now launched, since July 2006, a Master’s Programme (MA) in Sociology. At present the Department offers a rigorous programme of theoretical scholarship and substantive research training leading to the MA, M Phil and Ph D degrees.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Adult and Continuing Education & Extension</h1>
    		    <p>
    		       Adult, Continuing Education & Extension Centre of Jadavpur University was created in 1983 with UGC assistance to provide Continuing Education to workers, technicians and professionals. In 1986 activities were broadened to include Adult Education – literacy and post literacy. During IX Plan Extension and Field Outreach activities were recognized as third and fourth dimension of University education. In November, 2001 the Centre emerged as a fullfledged academic Department of the University under the Faculty of Engineering &Technology.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Architecture</h1>
    		    <p>
    		       The Architecture Department started its journey in the year 1965 as a constituent department in the Engineering faculty with fifteen students and Prof. Amiya Banerjee as the Head of the Department. In the course of time, the department was enriched with the contribution of several illustrious teachers and visiting professionals of international repute, who helped the department move from strength to strength. Today, the 1000 strong alumni are serving the profession and academics throughout the world.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemical Engineering</h1>
    		    <p>
    		       The introduction of Chemical Engineering in India as a distinct branch of engineering dates back to 1921 with the help of Acharya P.C. Roy and under the academic leadership of Professor H. L. Roy and Professor Baneswar Das, a course of study was offered for the first time at the Bengal Technical Institute, the predecessor of Jadavpur University. This department is one of the oldest departments in Chemical Engineering in the World. The department commemorated Diamond Jubilee in 1982 and Platinum Jubilee in 1996.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Civil Engineering</h1>
    		    <p>
    		       The Civil Engineering department started in the year in 1956. In last 44 years, the department has earned a high reputation. Nearly 5000 graduates of this department are serving the profession today around the globe. Apart from teaching and research, the symposia, short-term courses are provided. the department extends consultancy and testing services to the industry in different projects of national importance. The faculty members are known for their outstanding contribution to the discipline. A good number of Ph. D. students are working at present in different sponsored projects. At present, the department is involved in many prestigious projects as well as the department has sophisticated and computer controlled highly profile laboratory facilities. It also houses different audio-visual facilities as modern aids of teaching.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science & Engineering</h1>
    		    <p>
    		       Academic activities in the area of electronic digital computers were started in Jadavpur University under the ETCE Department in the early sixties and it got a big fillip in 1962, when the ISIJU project was undertaken in the Department in collaboration with the Indian Statistical Institute (ISI), Calcutta, to design and build ISIJU-1 computer was build and commissioned in 1966 and the success of this pioneering project prompted the U.G.C. to sanction a Computer Centre in Jadavpur University. The Centre was given adequate resources in terms of personnel, equipments, books, accessories, building space, research fellowship, etc. and it started offering, from 1968, a one-year P.G. Diploma course in Computer Science with an intake of 20 students from all over India. This course, the earliest of its kind in the country, ran very successfully till 1982-83 academic session and was discontinued thereafter at the instance of the U.G.C.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Construction Engineering</h1>
    		    <p>
    		       The department is comparatively new, being established as late as in 1989.It was concurrently set up with the second campus of the university in Salt Lake. The primary aim of the department is to impart application - oriented education to undergraduate students to equip them of Construction Management. Construction Management (including Computer Applications), Construction Plant and Machinery, Concrete Technology, Materials & Process of Construction, Repair & Rehabilitation of Structures are the principal subjects of study as offered by the syllabus of the construction technology at Jadavpur University. The department is now developing as a centre for soil, material & concrete testing including NDT and for industrial institute interaction in the fields of Construction Management, Repair and Rehabilitation of Structures.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electrical Engineering</h1>
    		    <p>
    		       Electrical Engineering Department received recognition for its excellent service to engineering teaching and research when UGC granted DSA funding in 1983. The success of this Department in achieving the goals of DSA lead to sanctioning COSIST grant of UGC to this department in 1987. Considering the successful utilization of funds granted and the significant contribution made in the related field, this department was recognized by UGC and Center for Advanced Studies (CAS) in 1990. Sustained efforts of the department bore further fruits in the year 2000 when DST, GOI provided significant financial support to this department under its FIST program. In 2002, Department received AICTE grant MODROB - Moderization of Illumination Laboratory in E.E. Dept.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemistry</h1>
    		    <p>
    		       The department of Chemistry was founded in the year 1956 and since then it has steadily developed into a leading centre of research and teaching in Jadavpur University. It has acquired the status of being chosen for the DSA and COSIST Programmes of the UGC. The areas of taught courses and research that comprise this department include Organic, Inorganic, Physical, Analytical & theoretical branches of Chemistry.
<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Geography</h1>
    		    <p>
    		       The Department of Geography under the Faculty of Science is offering undergraduate degree in Geography. The first session began in 2015-16. This has been a long standing vision of the Faculty of Science which has ultimately become fruitful. The Department has a vision to make it one of the best Departments in West Bengal for which several plans and programmes are being chalked out like preparations of the most updated syllabus in Geography under the Science Faculty and students will be offered science subsidiary subjects allied to Geography. The Department also plans to develop a state of art Remote Sensing and GIS laboratory for the students so that they can have access to the most updated knowledge of this branch of Geography which is emerging as a potential area of recruitment. The future plans also include postgraduate degree in Geography and a diploma course in Remote Sensing and GIS. The department is hosted in the third floor of the Megnad Saha Building (Integrated Science building). The Department also offers PhD programme in Geography which commenced from 2014-15.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Geological Sciences</h1>
    		    <p>
    		       Established in 1956, this department has seen phenomenal growth in its activities over the last four decades. This has been duly recognized by the University Grants Commission in conferring successively the status of:<br>
                        1. Department with Special Assistance (1973-87)<br>
                        2. Department with COSIP Programme (1983-88)<br>
                        3. Center of Advanced Studies (SAP) (1987- 2003)<br>
                        4. Department with COSIST Programme (1991-96)<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Instrumentation Science</h1>
    		    <p>
    		       Development of instrument, facilitation of instrumentation required for the industries and requisite manpower training are the basic motivation of this department. This department is backed by scientists having expertise in different techniques in plasma technology, bio-technology and materials synthesis with tailored properties and hence microstructure to suit the need of requisite technological applications. In-house infrastructure of this department ensures the expansion of the horizon of imagination of the scientists working in the field of instrumentation. Backed by the excellent manpower and infrastructure, this department has set its mark in frontline areas like: development of sensors and associated instrumentation, synthesizing materials with novel properties for device applications. Apart from the above, this department is associated with industries in India to develop marketable prototypes of some useful gadgets for the industries using toxic gases. Additionally, this department caters the need of industrial houses and research centers by extending the services of several in-house instruments having multi-disciplinary utility. Awareness of the use of current generation analytical instruments is percolated to teachers, scientists,technical personnel from institutions as well as industries through regular training programmes, workshops and refresher courses organized by this department.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Life Science & Biotechnology</h1>
    		    <p>
    		       The department of Life Science and Biotechnology was established in the year 1993. However, the plan of setting up such a department in Jadavpur University was conceived by the authorities as early as in 1985, since all the leading universities of the country had shown a rising academic interest in such interdisciplinary courses covering the vast areas of Life Science, Biotechnology, Genetic Engineering and Medical Sciences.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mathematics</h1>
    		    <p>
    		       This department is an important constituent of the Faculty of Science since 1956, the year when it was established, with its proficiency in taught programmes and strong research projects of excellence it has made significant contributions in the study of Mathematics in the country.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physics</h1>
    		    <p>
    		       The department of physics was established in 1956. Over the years, the department has developed into a significant Centre of academic activities involving different branches of Physics. It has acquired distinction as a Centre of Advanced Studies and Research in both theoretical and experimental Physics.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Department of Bengali</h1>
    		    <p>
    		       The Bengali Department in the Faculty of Arts, Jadavpur University, was established in 1956, which is highly acclaimed as a distinguished department of teaching and research, the reputation being enhanced by the fact that since its inception, the department has had as its teachers, some of the luminaries of Bengali literature, like AJIT DUTTA, Shankha Ghosh, Alokeranjan Dasgupta (Poets), Dr. Sushilkumar De, Dr. Suresh Chandra Moitra, Dr. Devipada Bhattacharya (Eminent scholars).<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Comparative Literature</h1>
    		    <p>
    		       The Department of Comparative Literature (Comp. Lit.) was started in the year 1956 and enjoys the reputation of a distinguished department to offer a subject which is distinct not only in India, but also in Asia. For the last two decades, the department has widened its sphere of learning to all-important Indian languages for comparative studies. It also exerts special emphases on African, Latin American and Australian Literature that are otherwise neglected in the taught programmes of the major departments of the Indian Universities.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Economics</h1>
    		    <p>
    		       The Department of Economics, established in the year 1956, is recognised nationwide for its importance in the teaching excellence and prospective research activities. Prof. Amartya Sen, the Welfare Economist and Nobel Laureate began his career both as a teacher and a research scholar in the Department of Economics, Jadavpur University. The teaching and research activities of the department in different fields have impressed the UGC. and consequently it has helped the department to set up a Centre for Regional Economic Studies under the Special Assistance Programme in 1987. In 2005 the Department of Economics became the 4th Centre of Advanced Studies (CAS) in Economics in India.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of English</h1>
    		    <p>
    		       The Department of English, Jadavpur University, founded in 1956, is the only Centre of Advanced Study in its discipline, a status awarded to it in 2004 by the University Grants Commission. In its long and distinguished history, it has attracted some of the best scholars and researchers in India. Past heads of department include Subodh Chandra Sengupta, Kitty Scoular Datta, and Sukanta Chaudhuri. Its chosen field of research for the CAS Programme is ‘Textuality and Culture’ (second phase: ‘Cultural Transactions’), and the work of its members has ranged from the Renaissance to the nineteenth and twentieth centuries, translation, the history of the book, literature and psychoanalysis, subaltern literatures and oratures, postcolonial literature, media, gender, travel, popular literature, creative writing and theatre studies, producing, in the past five years alone, over 80 academic books under imprints such as Permanent Black and Oxford University Press, and over 200 articles in refereed journals.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Film Studies</h1>
    		    <p>
    		       The Department of Film Studies at Jadavpur University, established in 1993, was the first of its kind in India. In a way this is a fair reflection of the strong film culture in this city. Satyajit Ray proposed the study of cinema as an academic subject when, in 1980, he visited the University to accept an honorary D.Lit. Jadavpur University has an enormous support base for a discipline like Film Studies. It has a considerable fund of expertise in the three faculties of Arts, Science and Engineering, and a very good infrastructural base. The strong cultural and intellectual tradition of Calcutta has also been of considerable importance in providing the right kind of atmosphere for the study of a frontier discipline.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of History</h1>
    		    <p>
    		       The Department that started its academic career with just one student in the undergraduate level, on the very first year of its coming into existence in 1956, has now developed into a prestigious faculty with excellent achievements in the fields of teaching and research. The Department can boast of a rich legacy of eminent faculty members such as Prof. Nemai Sadhan Bose and Prof. Sushobhan Sarkar.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of International Relations</h1>
    		    <p>
    		       The Department of International Relations was established in 1956 and is the only one of its kind in eastern India. The Department of International Relations is located at the main campus of the Jadavpur University and is housed in the ground, first and fourth floors of the PG Arts building. The Department imparts knowledge on the varied aspects of national and international politics giving primary emphasis on contemporary issues relating to political, strategic and economic matters. There are at present 19 faculty members. Faculty members of the department are engaged in teaching at the Undergraduate,Postgraduate and M.Phil. levels, as well as in research in different aspects of international relations. At present, five options are offered on Area Studies which are included as special papers in the Postgraduate course. The department promotes research in such areas as internal and external security concerns of India and South Asia, bilateral relations, foreign policy, problems of ethnicity, society and the role of military in South Asia, human rights, environmental issues and the concept of gender in international relations. The Department also has a Centre for Refugee Studies.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Library & Information Science</h1>
    		    <p>
    		       This Department was inducted to the Arts Faculty of Jadavpur University in the year 1964 and till 1984, it conducted only B. Lib. and Inf. Science Course of one-year duration from 1985 onwards, the Department started a full time Masters Degree course and B. Lib & Inf. Science is offered as an evening course of 1.5 years duration.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Philosophy</h1>
    		    <p>
    		       The Department of Philosophy, Jadavpur University. was established. in 1964. The renowned Prof. Gopinath Bhattacharya had been the first Head of the Department of Philosophy and under his guidance, the best scholars of the country were recruited as the faculty members of the department. As a result, from the very beginning this department has flourished.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physical Education</h1>
    		    <p>
    		       Jadavpur University born in 1955 has a short but glorious history. Having its origin from National Council of Education, Bengal, it has a chequered career where in the concept of indigenous system of education free from the clutches of British rulers and serving the interest of local people took shape and ultimately through various stages culminated in the development of the present University in 1955. NACC has accreditated Jadavpur University with "A" grade and has identified as one of the five Universities of the country as a centre of potential for excellence.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Sociology</h1>
    		    <p>
    		       The Department officially came into being in December 2001, though teaching Sociology started much earlier, in 1992, as a component of the Humanities course for students in the Faculty of Engineering and Technology. The Department started offering a two-year M Phil Programme in Sociology, the first of its kind in West Bengal, from July 2002. Since 2005 it started four Extra Departmental courses for under-graduate students of various departments of the arts faculty of the University. Department has now launched, since July 2006, a Master’s Programme (MA) in Sociology. At present the Department offers a rigorous programme of theoretical scholarship and substantive research training leading to the MA, M Phil and Ph D degrees.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Adult and Continuing Education & Extension</h1>
    		    <p>
    		       Adult, Continuing Education & Extension Centre of Jadavpur University was created in 1983 with UGC assistance to provide Continuing Education to workers, technicians and professionals. In 1986 activities were broadened to include Adult Education – literacy and post literacy. During IX Plan Extension and Field Outreach activities were recognized as third and fourth dimension of University education. In November, 2001 the Centre emerged as a fullfledged academic Department of the University under the Faculty of Engineering &Technology.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Architecture</h1>
    		    <p>
    		       The Architecture Department started its journey in the year 1965 as a constituent department in the Engineering faculty with fifteen students and Prof. Amiya Banerjee as the Head of the Department. In the course of time, the department was enriched with the contribution of several illustrious teachers and visiting professionals of international repute, who helped the department move from strength to strength. Today, the 1000 strong alumni are serving the profession and academics throughout the world.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemical Engineering</h1>
    		    <p>
    		       The introduction of Chemical Engineering in India as a distinct branch of engineering dates back to 1921 with the help of Acharya P.C. Roy and under the academic leadership of Professor H. L. Roy and Professor Baneswar Das, a course of study was offered for the first time at the Bengal Technical Institute, the predecessor of Jadavpur University. This department is one of the oldest departments in Chemical Engineering in the World. The department commemorated Diamond Jubilee in 1982 and Platinum Jubilee in 1996.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Civil Engineering</h1>
    		    <p>
    		       The Civil Engineering department started in the year in 1956. In last 44 years, the department has earned a high reputation. Nearly 5000 graduates of this department are serving the profession today around the globe. Apart from teaching and research, the symposia, short-term courses are provided. the department extends consultancy and testing services to the industry in different projects of national importance. The faculty members are known for their outstanding contribution to the discipline. A good number of Ph. D. students are working at present in different sponsored projects. At present, the department is involved in many prestigious projects as well as the department has sophisticated and computer controlled highly profile laboratory facilities. It also houses different audio-visual facilities as modern aids of teaching.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science & Engineering</h1>
    		    <p>
    		       Academic activities in the area of electronic digital computers were started in Jadavpur University under the ETCE Department in the early sixties and it got a big fillip in 1962, when the ISIJU project was undertaken in the Department in collaboration with the Indian Statistical Institute (ISI), Calcutta, to design and build ISIJU-1 computer was build and commissioned in 1966 and the success of this pioneering project prompted the U.G.C. to sanction a Computer Centre in Jadavpur University. The Centre was given adequate resources in terms of personnel, equipments, books, accessories, building space, research fellowship, etc. and it started offering, from 1968, a one-year P.G. Diploma course in Computer Science with an intake of 20 students from all over India. This course, the earliest of its kind in the country, ran very successfully till 1982-83 academic session and was discontinued thereafter at the instance of the U.G.C.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Construction Engineering</h1>
    		    <p>
    		       The department is comparatively new, being established as late as in 1989.It was concurrently set up with the second campus of the university in Salt Lake. The primary aim of the department is to impart application - oriented education to undergraduate students to equip them of Construction Management. Construction Management (including Computer Applications), Construction Plant and Machinery, Concrete Technology, Materials & Process of Construction, Repair & Rehabilitation of Structures are the principal subjects of study as offered by the syllabus of the construction technology at Jadavpur University. The department is now developing as a centre for soil, material & concrete testing including NDT and for industrial institute interaction in the fields of Construction Management, Repair and Rehabilitation of Structures.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electrical Engineering</h1>
    		    <p>
    		       Electrical Engineering Department received recognition for its excellent service to engineering teaching and research when UGC granted DSA funding in 1983. The success of this Department in achieving the goals of DSA lead to sanctioning COSIST grant of UGC to this department in 1987. Considering the successful utilization of funds granted and the significant contribution made in the related field, this department was recognized by UGC and Center for Advanced Studies (CAS) in 1990. Sustained efforts of the department bore further fruits in the year 2000 when DST, GOI provided significant financial support to this department under its FIST program. In 2002, Department received AICTE grant MODROB - Moderization of Illumination Laboratory in E.E. Dept.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
                <h1 class="course_name">Bachelor of Education</h1>
    		    <p>
    		       Specialization
	                <br>1. Education of Children with Special Needs & Rehabilitation Management
                    <br>2. Rehabilitation Psychology & Counselling
                    <br>3. Educational & Vocational Guidance & Psychological Counselling
                    <br>4. Mental Hygiene & Behaviour Modification Technology
                    <br>5. Inclusion in Education<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="phd_block" style="display : none;">
                <h1 class="course_name">Department of Bengali</h1>
    		    <p>
    		       The Bengali Department in the Faculty of Arts, Jadavpur University, was established in 1956, which is highly acclaimed as a distinguished department of teaching and research, the reputation being enhanced by the fact that since its inception, the department has had as its teachers, some of the luminaries of Bengali literature, like AJIT DUTTA, Shankha Ghosh, Alokeranjan Dasgupta (Poets), Dr. Sushilkumar De, Dr. Suresh Chandra Moitra, Dr. Devipada Bhattacharya (Eminent scholars).<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Comparative Literature</h1>
    		    <p>
    		       The Department of Comparative Literature (Comp. Lit.) was started in the year 1956 and enjoys the reputation of a distinguished department to offer a subject which is distinct not only in India, but also in Asia. For the last two decades, the department has widened its sphere of learning to all-important Indian languages for comparative studies. It also exerts special emphases on African, Latin American and Australian Literature that are otherwise neglected in the taught programmes of the major departments of the Indian Universities.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Economics</h1>
    		    <p>
    		       The Department of Economics, established in the year 1956, is recognised nationwide for its importance in the teaching excellence and prospective research activities. Prof. Amartya Sen, the Welfare Economist and Nobel Laureate began his career both as a teacher and a research scholar in the Department of Economics, Jadavpur University. The teaching and research activities of the department in different fields have impressed the UGC. and consequently it has helped the department to set up a Centre for Regional Economic Studies under the Special Assistance Programme in 1987. In 2005 the Department of Economics became the 4th Centre of Advanced Studies (CAS) in Economics in India.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of English</h1>
    		    <p>
    		       The Department of English, Jadavpur University, founded in 1956, is the only Centre of Advanced Study in its discipline, a status awarded to it in 2004 by the University Grants Commission. In its long and distinguished history, it has attracted some of the best scholars and researchers in India. Past heads of department include Subodh Chandra Sengupta, Kitty Scoular Datta, and Sukanta Chaudhuri. Its chosen field of research for the CAS Programme is ‘Textuality and Culture’ (second phase: ‘Cultural Transactions’), and the work of its members has ranged from the Renaissance to the nineteenth and twentieth centuries, translation, the history of the book, literature and psychoanalysis, subaltern literatures and oratures, postcolonial literature, media, gender, travel, popular literature, creative writing and theatre studies, producing, in the past five years alone, over 80 academic books under imprints such as Permanent Black and Oxford University Press, and over 200 articles in refereed journals.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Film Studies</h1>
    		    <p>
    		       The Department of Film Studies at Jadavpur University, established in 1993, was the first of its kind in India. In a way this is a fair reflection of the strong film culture in this city. Satyajit Ray proposed the study of cinema as an academic subject when, in 1980, he visited the University to accept an honorary D.Lit. Jadavpur University has an enormous support base for a discipline like Film Studies. It has a considerable fund of expertise in the three faculties of Arts, Science and Engineering, and a very good infrastructural base. The strong cultural and intellectual tradition of Calcutta has also been of considerable importance in providing the right kind of atmosphere for the study of a frontier discipline.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of History</h1>
    		    <p>
    		       The Department that started its academic career with just one student in the undergraduate level, on the very first year of its coming into existence in 1956, has now developed into a prestigious faculty with excellent achievements in the fields of teaching and research. The Department can boast of a rich legacy of eminent faculty members such as Prof. Nemai Sadhan Bose and Prof. Sushobhan Sarkar.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of International Relations</h1>
    		    <p>
    		       The Department of International Relations was established in 1956 and is the only one of its kind in eastern India. The Department of International Relations is located at the main campus of the Jadavpur University and is housed in the ground, first and fourth floors of the PG Arts building. The Department imparts knowledge on the varied aspects of national and international politics giving primary emphasis on contemporary issues relating to political, strategic and economic matters. There are at present 19 faculty members. Faculty members of the department are engaged in teaching at the Undergraduate,Postgraduate and M.Phil. levels, as well as in research in different aspects of international relations. At present, five options are offered on Area Studies which are included as special papers in the Postgraduate course. The department promotes research in such areas as internal and external security concerns of India and South Asia, bilateral relations, foreign policy, problems of ethnicity, society and the role of military in South Asia, human rights, environmental issues and the concept of gender in international relations. The Department also has a Centre for Refugee Studies.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Library & Information Science</h1>
    		    <p>
    		       This Department was inducted to the Arts Faculty of Jadavpur University in the year 1964 and till 1984, it conducted only B. Lib. and Inf. Science Course of one-year duration from 1985 onwards, the Department started a full time Masters Degree course and B. Lib & Inf. Science is offered as an evening course of 1.5 years duration.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Philosophy</h1>
    		    <p>
    		       The Department of Philosophy, Jadavpur University. was established. in 1964. The renowned Prof. Gopinath Bhattacharya had been the first Head of the Department of Philosophy and under his guidance, the best scholars of the country were recruited as the faculty members of the department. As a result, from the very beginning this department has flourished.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physical Education</h1>
    		    <p>
    		       Jadavpur University born in 1955 has a short but glorious history. Having its origin from National Council of Education, Bengal, it has a chequered career where in the concept of indigenous system of education free from the clutches of British rulers and serving the interest of local people took shape and ultimately through various stages culminated in the development of the present University in 1955. NACC has accreditated Jadavpur University with "A" grade and has identified as one of the five Universities of the country as a centre of potential for excellence.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Sociology</h1>
    		    <p>
    		       The Department officially came into being in December 2001, though teaching Sociology started much earlier, in 1992, as a component of the Humanities course for students in the Faculty of Engineering and Technology. The Department started offering a two-year M Phil Programme in Sociology, the first of its kind in West Bengal, from July 2002. Since 2005 it started four Extra Departmental courses for under-graduate students of various departments of the arts faculty of the University. Department has now launched, since July 2006, a Master’s Programme (MA) in Sociology. At present the Department offers a rigorous programme of theoretical scholarship and substantive research training leading to the MA, M Phil and Ph D degrees.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Adult and Continuing Education & Extension</h1>
    		    <p>
    		       Adult, Continuing Education & Extension Centre of Jadavpur University was created in 1983 with UGC assistance to provide Continuing Education to workers, technicians and professionals. In 1986 activities were broadened to include Adult Education – literacy and post literacy. During IX Plan Extension and Field Outreach activities were recognized as third and fourth dimension of University education. In November, 2001 the Centre emerged as a fullfledged academic Department of the University under the Faculty of Engineering &Technology.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Architecture</h1>
    		    <p>
    		       The Architecture Department started its journey in the year 1965 as a constituent department in the Engineering faculty with fifteen students and Prof. Amiya Banerjee as the Head of the Department. In the course of time, the department was enriched with the contribution of several illustrious teachers and visiting professionals of international repute, who helped the department move from strength to strength. Today, the 1000 strong alumni are serving the profession and academics throughout the world.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemical Engineering</h1>
    		    <p>
    		       The introduction of Chemical Engineering in India as a distinct branch of engineering dates back to 1921 with the help of Acharya P.C. Roy and under the academic leadership of Professor H. L. Roy and Professor Baneswar Das, a course of study was offered for the first time at the Bengal Technical Institute, the predecessor of Jadavpur University. This department is one of the oldest departments in Chemical Engineering in the World. The department commemorated Diamond Jubilee in 1982 and Platinum Jubilee in 1996.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Civil Engineering</h1>
    		    <p>
    		       The Civil Engineering department started in the year in 1956. In last 44 years, the department has earned a high reputation. Nearly 5000 graduates of this department are serving the profession today around the globe. Apart from teaching and research, the symposia, short-term courses are provided. the department extends consultancy and testing services to the industry in different projects of national importance. The faculty members are known for their outstanding contribution to the discipline. A good number of Ph. D. students are working at present in different sponsored projects. At present, the department is involved in many prestigious projects as well as the department has sophisticated and computer controlled highly profile laboratory facilities. It also houses different audio-visual facilities as modern aids of teaching.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science & Engineering</h1>
    		    <p>
    		       Academic activities in the area of electronic digital computers were started in Jadavpur University under the ETCE Department in the early sixties and it got a big fillip in 1962, when the ISIJU project was undertaken in the Department in collaboration with the Indian Statistical Institute (ISI), Calcutta, to design and build ISIJU-1 computer was build and commissioned in 1966 and the success of this pioneering project prompted the U.G.C. to sanction a Computer Centre in Jadavpur University. The Centre was given adequate resources in terms of personnel, equipments, books, accessories, building space, research fellowship, etc. and it started offering, from 1968, a one-year P.G. Diploma course in Computer Science with an intake of 20 students from all over India. This course, the earliest of its kind in the country, ran very successfully till 1982-83 academic session and was discontinued thereafter at the instance of the U.G.C.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Construction Engineering</h1>
    		    <p>
    		       The department is comparatively new, being established as late as in 1989.It was concurrently set up with the second campus of the university in Salt Lake. The primary aim of the department is to impart application - oriented education to undergraduate students to equip them of Construction Management. Construction Management (including Computer Applications), Construction Plant and Machinery, Concrete Technology, Materials & Process of Construction, Repair & Rehabilitation of Structures are the principal subjects of study as offered by the syllabus of the construction technology at Jadavpur University. The department is now developing as a centre for soil, material & concrete testing including NDT and for industrial institute interaction in the fields of Construction Management, Repair and Rehabilitation of Structures.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electrical Engineering</h1>
    		    <p>
    		       Electrical Engineering Department received recognition for its excellent service to engineering teaching and research when UGC granted DSA funding in 1983. The success of this Department in achieving the goals of DSA lead to sanctioning COSIST grant of UGC to this department in 1987. Considering the successful utilization of funds granted and the significant contribution made in the related field, this department was recognized by UGC and Center for Advanced Studies (CAS) in 1990. Sustained efforts of the department bore further fruits in the year 2000 when DST, GOI provided significant financial support to this department under its FIST program. In 2002, Department received AICTE grant MODROB - Moderization of Illumination Laboratory in E.E. Dept.<br>
    		        <a target="_blank" href="http://jaduniv.edu.in/">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
           
            <div class="admit_block">
                <h1 class="admit_name">Rules & Regulation</h1>
                <p>Admission to Jadavpur University, though extremely competitive, is through a completely transparent and student-friendly process, from application to publication of admission test results; details are available to anyone who inquires. The process is reviewed annually and improvements implemented (e.g. making applications to all courses at the Faculty of Arts online) on a regular basis. Students from backward and disadvantaged sections of society, especially those from remote rural areas, are encouraged to apply and there are many schemes and programmes for such students.

All new students are made aware of the university's origins (as the patriotic and anti-imperial National Council of Education, Bengal, in the early 20th century), its heritage, mission and vision. They are briefed about facilities available for them (e.g. library and medical facilities, counselling services, special services for differently-abled students); the university's zero-tolerance policy with regard to ragging and sexual harassment, among others. All students are expected to abide by the values that Jadavpur University stands for, including devotion to the truth, the practice of virtue, selflessness and duty to others, and to take these as the guiding principles of their lives.

Students are encouraged to take an active part in curriculum development, not only through their formal feedback on teachers, course content and infrastructural facilities, but also through debate and discussion at the department-specific student-teacher committees; student representatives at various statutory bodies are provided a platform to make the student community's views known and to contribute to planning for the future.

                    <a target="_blank" href="http://www.jaduniv.edu.in/#/#">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>Office of the Placement and Training<br>
                    <a target="_blank" href="http://www.jaduniv.edu.in/#/#">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '23'";
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
					$sql1 = "SELECT * FROM colleges where id = '23'";
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