<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | NATIONAL INSTITUTE OF HOMOEOPATHY</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/6250_NIHK_APP.jpg?tr=w-1286,h-193,c-force"></img>
		     <img class="logo" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhMVFhUXGB8YGBgYGB0fGBggGhgaGBoeHh0bHSkhGxsoHhgZKDEhJikrLy4uHyAzODMvNygtLisBCgoKDg0OGhAQGislICUuLS0yKysvLS0tMi0tKy0vLSsvLS0tLS4tLjUtLS0tLS0tLS0vLy0tLy4tLS8vLS0vLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAABQYHBAMBAv/EAEwQAAIBAwIDBgIFCQUFBQkAAAECAwAEEQUhBhIxBxMiQVFhMnEUI0KBkRUzQ1JicoKhsSRTkqLSNERVk9EXlMHC4RaDo6Sys8Pw8f/EABgBAQEBAQEAAAAAAAAAAAAAAAABAgME/8QANBEAAgECAwMMAAUFAAAAAAAAAAECAxESITFBUdETIjJhcYGRobHB4fBCYoKi8QQjM1KS/9oADAMBAAIRAxEAPwDcaUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClfM1U+I+0WxtMq0neyDrHFhiD6E5CqfYkH2rUYSm7RVwW2lZW3FetXv8AsVmLeM9JJR4vY5kAXHyRvnUNfaVI2W1LW9gQjpCzMqsQSAeUhRsD9jyNdl/T26UkvN+RLmx3epQxDMssaAebuq/1NRj8ZaeOt7bf85P+tUW+7MLG2gMyQ3N22x5VkVWIPU+FV2xvXHwRo2l37OF02RFQbu1zIwz5LgSdce1Xk6Vr3b7lxF2aMnGennpe23/OT/rXdaa1bS/m54X/AHZFP9DWU61pOmx3jWUWlTTyBA/1dzIuQRk7GTyqb/7JrCWJWKXEDMoJXvAxUkdDzhgcUcKStdtdy4i7NJzX2sqn7Pru1Xns9UkjVR8MrFUHpkg8n+SvG34n1uzANxAl5D/eRYJO/UNEOnzSoqCl0JJ+XqLmt0qk8P8AafY3JCMzQOduWXAXPTAcEr9xwfarqrA7iuM4Sg7SVin2lKVkClKUApSlAKUpQClKUApSlAKUpQClKUAqvcWcY21gmZny5GViXBkb3xnwr+0cCoDjzj/6O/0OyXvbtvDsOZYyegx9qT9noOp9DWJNC/J6/Tr6OW9vXy4XBaKMgZ5nboSNvLAx4RtmvRTorJz26La+CJc+Xmo6hqamWeUafp/mSSOYemdmkJ/hX2NTU3CaWVss2lwQzyhebvpjzOAFyGjHw59gBUvw3qCarp7JMUZmBSVVBHdk55difIYIPnUX2b6m8EsulXJzJBkxMejJ6D8QR7H2rcpys0la2z7qSxJ9mOuSXdq0ksxklEhDAqByegGB8JG+9Z3xFpgjutTtANpE+kRjG2UIk/o0lWWys5NN1rljR2trvfwqSqknO+Nhyt/JqnOMuC3urmO6gnWGRU5DlOYMDkE9evKxG9RSjCd08mr/AHvBIcAX5uNOgbOWEfdn5p4P/AVUOxJ+SS9gPxKykny8JdP61buGNMg0y2WB502JYtIypknc4BOw2qG0C40eylmliv4S0xywMysB4i2wHuTWdVNRTs9MusEKtpLc69dd3O0DxIAHVVYkYQYw22/N1rW16Cssv7DRZ7h7k6kFkkYMeW4VemMDGAcbCtJtL6KQYilR8D7Lhv6Gs1ru2T03FKB2yXJkFtYJ8c8gJ9gDyjPtk5+6uTsmUfS75oQVtgQqrnw5DEZA8sgE+2a9+NOF75776ZbKkw7vu1Vm5TESpXIzsfiJHua5r5PyLpBi5l+kzkjI8iw3x6hVGM+tdVZ01COr++yIcur6tY31zPG+nySojBBc2wPeg55csB1HNnGc9OldH5J1TSBz2chu7QbtCwPMg9lGSPnHt1JSpzsv4ZmtYUd5AFlXneLkGQxxynn67L5epq9EgVmVbC8Kzjuef8dwsV3g/ji2v1xG3JMBlomI5tupU9HX3HTbIFWisf4i0uzvriVtPk7u9hwxK+GOQ5x4WHSTO3MP51L8CdoDs4stRBjuAeVXYcveHyDDornyI2bywcAydFNYoeG1cUW5pNKUrzlFKUoBSlKAUpSgFKUoBSlKAVQO0XjJ4WWxsfHeS+Hw7mIN09ucjcZ2UeI7YzN8e8ULYWrS7GRvDEp82x1P7Kjc/h51n3DtvJYxfTpI1ub+f6xo2kCypE25IU7l26nAGBgeW/oowVscu5b3wI2ccqHRQiBY3v5gXaaQExxrndVJ+JierbZzv5Ve+EON4buJFmeKOdyVMXOCWx5gHcAjyNfbPUtP1ePkdQ7LuYpBiRD5kb5+8bVn/EfCM4naCCwC8zhoJomblVR152b8fIg9M1vm1HaeUt5NCc1fRLjS7wXlhE0lvIwWSBM7ZPTHpncHy+VWniDh2CWe3v5JDA1v4nOQMjGQHY9Mb/dkV7apxDHplnG15L3koQKAPjlZQM4B6D1Y7CqbaaBfa063F+xt7UHmjgX4mHqARt5eNhk74ABBqRTksUnZLK+/iCR1XtQRn7nTreS6lPQhWCdcZAALsPfCjHnXKnDuuXu91di0RvsR/EPujI/nIa0TRNDt7SPu7eJY188dW92Y7sfck1IVnlow/wAce95vgW28zuz7H7IHmnknmc9SzBc/4RzfixqVh7MdLX/dif3pZT/V6uFKw69R/iYsinz9mWlt/uxH7sso/o9RN32P2ZPNBLPCw6FWBx+I5v8AMK0alFXqLSTFkZW+ga7YjNtdLeRj7EnxH7pCT+En3V8h7QbaU/R9WszBICM86FkBzscEB0GRnOCPetVqM13Qbe7j7u4iVx5E/EvurDdT7g1vloy6ce9ZMW3HTbzo6B42VlIyrKQQR7EdRWb9pPFjszWFtlW5czynKiNOp3+XVvuGSa4r/Qb7RWM9k7XFpnmkhbqo8ywA/wDiKNvMYGansWeu2o5XaN1ILqCO8XHkf1kOdj0++igoNT1j6dqIUTs/4ae9dOYGO1hbmLJkd7IDtudyff7I2HWrT2gpp97KLYTIl6vhRjnlJ/u3bpk+QPQ1z8U61JCx0nT07hYlBkmZuUImMkgny33bck7Cqrw9wu18witg4hDZmu3G7MN/Bnp12HXO7Hyrvm3yjdt3zwIXvs74ykEn5N1DK3CeGNn6vgfCx82x0b7Q9xvpVZ72j8IC4hSWEn6VAo7s58UgTxY/f2yCOhqT7NuLPp1viQgXEXhlHQn9V8eWcHI8mDCvPUipR5SPevuw0txb6UpXAopSlAKUpQClKUAr4TX2qh2qa79E0+RlbleX6pD5jmBLEe4QMfnitQi5yUVtBSzdR6nqMt3cMF0+xGFLfCx5tvmGI5j+yIx51LcW8Ew6oPptlOrSEebc0b4Gw9Yz/L2qW4U4NhTTY7W4iDFvrJQf1238sfCMKP3RUFedmk1u3e6XdvG3XkdiAf4gMHb9YGvU6kcXNla2S3W+TJn1tokqXHcyyta3QbEZcMFc9ByyqepOMbEGtmuNcbTdOWW/kWScDlwu3ePuVUbenVsdATXJwmt3OWXVbWMG3IaOYgeI+ZHUbYByMfKs813iIXt8t1LDJNZQyiGFFIVXY7rzFthzkBjn7IUGtWdaVnot3omNCZ0rgu+1Fl1G5uFhkYholaEScqjdMI7cqr5hSD+sdzVu/wDZ3Vv+Nf8AycNeo4ovvLSJ/wDnQf6q+/8AtNf/APB5/wDnwf6qxKdSX+tv0hWIDWY9WgdYk1SSeUoZOSO0gBCrgEktt1OAPM1y3dzqaBydUlHJbfSSDaQK2MleXBGzAipLVJ76WUTrpt1FKI2i5kubfdW33DEjIO4PlXFf2t9KMHTrvJg+jyN9Lti0iZ5tyejZJ3HrUWL8v7Qcmo6lqUMjo+qScsaI7MLe2z9ZuAEOGbpvivaGTVnuHgXUmIRwjOYrZeqq+QhHMdmHSv3qdheTO0p0iUSHuyji7tuaPuc45SfUHBHnX7X8prcPOunTLzuJHjN3acpIUL1MZYDCjoavP/L+0Efp+qahOVWLVZTIZnh5DbwAhkR3BzjHK3IQDX4n1HVkjnllvZkEDrG/1VsSXYrsMDoA4Oa77axvklgmXSG54C5U/T4fFzljhsJvgu2PSve7g1CSO4ibSNriTvGP06LKsAgBX6ry5AavOv8Ah/aCP1u71K37wHU5WKTRw/mYFDGVOYHLDAA881I8PW+pXauV1aVDG5jdWt4DggA7MmVYYPUGuE6NqLpyS6e8pM6Ts8l9CSxjAVVIEIHLgY6VL6C2p2qNHFpachdmVTeR4TmPMVGI/hyTjNJJ2yw3/SDsPDOqf8Zf/u0X/SqlqvBt7pjflC2nEzoeaVRGEyp3fwqcMm24AGOo6Vc/y3q//Cov++L/AKK+HWdX/wCFw/8AfF/0VIzqRf4bfpB+bS107WoEuXhDMPCdyHjI3KEqRkb5HkQQfOorVeOVgheLTbfCQ+EyuvJBHjyAOC7Z6AdTVN4Z4iNhfyS90IrSWYwzIj88UbDfKPgA8h5jgfZLAZwKt/avoDzd1JGLiYE8qwRBeQMQTzk4yM9M7/dVnTUZpPovTgCk6Dqzy3SXt9fmPumDKN2eT1VI12C+RP8A/amdUvo7C/g1W1Ja0us94AD5nMgx+ttzgdcqR516cOdk8kh57xu6XP5pDl/kX6D7smrZxLw1afk+WytgiuqmZEDAvzJvnBOd9wfnW5VaamraaPdYli9RSBgGUggjII6EHcGv1VC7G9b7+xELHL257vfryEZj+4DK/wAFX2vHUg4ScXsNoUpSsAUpSgFKUoBWX8ef2vWLCx35I/rpB5Hcvg/wxY/jrUKyzhTFxruo3GSRGndL7ZKR7en5l/xNd6GWKW5Ph7kZoNlq8MuRHLG5BweVwSCPXBr2ubxIxzOyouQMsQBk7AfM1Q9R7JrRyXhklhY5Ozcwyfnv/OuFeAdQDxRyXvf2yyq7I7OD4GDDY5329azgpvSXigTPa9rZgse5jz3lye6AHXl6yfiML/GK6dN4IiXS/oMoHjTMjY/SMMlh7qcY9gKqPHNm2oazHZK/KIoTv5ozIZCf/s7emauXAGtyTwvBcbXVs3dTKfMj4W9wwHXoa7SThSjh7X7E2nzs/wBXkeOS1uP9qtW7qTPV1/RyD2ZfP1B9at1Ubje2a1mi1WEH6r6u6VeskBIyfdkPiH/pVvS8RoxIrcyFQ4YbgqRkEeoxXCqk7TWj9dpUdVKqa8aJ3XeGN1bHwMQGzl9v8Khs+jCvfSuJ++uTbiPBVQS/OCpzzfDgeIeE71yBN398kKNI5AVQTucZwCds9Tt0qi6hxIdSH0S3jkSOYIDMTyOEYFnIRgDjCFQwyM1buJdDivIe6l/WDK2ASrA7EBgQfcHqKzG9tryyv7dwscqoHZEh2YxEhWQBj0DNkICcb42rrTin2gn9L47W1U29yrN3C8jSp4uYo/dAsAPq84z4jvg1oMMwYAqQQfMHIrHeGNEurqa470wojS97MhAZg7qWTI+ElQT4WOAdyDWgXd1FptrGiJlVIQAHB33JJx65J+dSpFJ2QLNSqzNxQASFjdyJGT02QZLDbddj+BqKftAAjSX6O+HTnHjH6rMATy4BIU+lYsC91Tu0XXJIo0tbbe6uj3cWD8A+3J7YB2Pqc+RqattZQ2xuZfq0Cl2y2eULuTkddhVW4Ds5LuaXV7hSGl8Fujfo4R0PzO/4k+ddaSSvN7PUM6tR4GiGlGwTGUXmRj/ejxcxPkCcg/skivLsp4gNxpuCcywAx79SAvNEffwkD3KmvTj2+edotKtiRLc7zMOsUAOHJ9C26j7/AGqB4RtBY65cWSbRSxK0YJ3PKoYf1m/CuyTlSeJ59Lj4+xNpS9S4yvJxyzXhQHIMcSlWznocYyf4qkOCOHrtruC4igkRFfmeWY/EpGGGNicgnpV21/i2ys7qSMWLPcrglo4ky3MAQeYeL+VRVx2nXbhzBp5AQjmL8x5RjPiAAx863ebjzY2T7Fw8yHjwT/YtduLTokwYKD54+ujP3L3g++thrD9a1UyXWkal4Q0pCyBc4HJMqMBn9mRh91bfXH+oXRl1emRpH2lKV5yilKUApSlAKxnhC1nlXWDakid5+RGDcpGJZT18tmNbNWQdn+tJaflSSRXYLdbhBlt5JF6fMV6KV8ErdXqRle1eDV442E/5Q6blX5o/b4MnG1WPsza0e4Ux3N686xFnjlY91uAG6+52qXu+1u1UbQXJPoyBf/qNdXB3G1vfXDRxWzxuELGRgnkQMErv5+fpXSTm4O8bdmRCJ4JTvde1GY4PJlPfqse33RVL8b2zWc6avApIQCO8QfbiOwfA6sh/l7Cons8bl1nVEPVnZh8u9Zv6OtabPEHUqwBVgQQehBGCCPSs1ZYai3WXhYLQ5Y2SaMEFXjdfmrKw/mCDVC0ua4sjPpkXKzopnse8yRJEWy0Wc/EhyBv0PoK9dEvzpcr6bLvHkPZuzYBjd8OjMfOMnPuPTaoO7nvLrEwIaWBpJbd+VVVZI5jE1uG5vrFlQY9cgeVSMbNxej09n7PvBGz9qN8jskkFurrsysjBl9iOavwvaveDcQ23+Fv9VW/iWFdS09Lu1ghkcjmKuv1gwCroGUgh1II6+VZY0iYwNOw3qWuCMjrlScH5V3gqclnDNfd5C72vaBc3lpexnkSdYuaLu8hiucSYySeYLvtXVwqefT7GR5BIwvI1XIGYlDleQHGegyT51TIY+8hllKxwXESiW3WJeVyqn63IB+HB6tv16iu3SI2eaJbeZra6nQSN3aj6OAfgLKSeWQ9dhgE+WazOnGztln7egJniudodIjMUgjEs8ySKoGZQZJOpxnIwN8iv1qXaDcW1vaRckbTGENL3gJI8kyARhiBk5qDVpOS5lmYzXdqeYJLvEELYMsaDC8wODvmuS6hZYY5QsVxK4MtyJAGk8ZBj2znk5fNfM1YwjZKWef3uBK/9rF7/AHVv/hb/AFV6WfaVfyuIoraB3boiRtk4/i/nVYjZcAHTSzHzDXA3PooOB8q0yxkXStM+kSW8KXUnhSNFIZnf4FJJJJGMtg9Aa1ONNWShm/u8ZkVxfq80/dafIq+EpJeCHwrzOw7qDLHYkkFifY+Rq02nH9lHEwb6vuoyeUbxt3WFZInwBIQSBt5mqnpliI42iedEu2JluI7yMd1dFvHsTueU9GB2323r9cO2i6reRP3ZS3tkVpI8/ViTqsUYAHg2DNnc9D5VxcYvL8K++ewpc+zzSZQsl9dDFzdkOyn9Eg/NxjPoKgeL0EfEGnSjq68h9/zif/krT6zLjrfXNLUdRv8A5yf/ACmpSm5VG3ufoHoTWs3djY3Zu55iks0Qj5cZyEOebCjPtk1wx8aaOJJXEg5pgFlJSTDgDlAIK4xgmuTtD4IuLq5S4t+5b6vkZZegwSQRsc9arR7N9Q/urL+f/SpCFJxTlLMHT2ri3W0sZLQIIg7mPu/hwQGOPvUVs6nIzWEcf6Q9rpllbSFTIJJSeU5HiBO341uyDYfKpV6Ee/1CP1SlK85oUpSgFKUoAayDQ7WT8paxaQy9zLKA8b/q+Pnzt7Tj8a1+sv4hP0TiG1n2CXUfdMfVvzf9e4rvQzxR3r0zIyOPZPcu/eTXqvvliyO7f5mwasPDWifRblUOpCQcpxbBUQHbqAp8utZxreuSSSzJe3lyrrKyfR4UwAAcLg8wGPYg00LQpZZYntLK4TlkRzPI5BABy32VXGM9MmvQ4Tcbzl5L48jJbYJTa8SuPs3Kj/NGu/8Ajib8a1oVlXbPYlGtdQjGTE4R8fvCSPJ8hkMP4xWk6RqKXEMc8Zysihh9/UfMHauFbnRjPqt4GkQnH3DZvLfEfKJ4j3kLHpzD7LeqMNiDt0PlWVS6l4ImjKrKW5V70F3gZT9YFhRAkIQ58XKWbY+db5WW8faV9FnNyAPo9ywWdSzhEmG0cjBCCUbJVh5nBNKUsSwvu4ffcM8eD9fijuz3Ts1rePy85QoqXQUF+UHoso3/AHhirRxdwqLhWkSW5SQKfDDMVV9tl5W8Iz61V7TQ5L2Mrh2iZcLO57pIyCCht4E6YZR4nIOAR5mrjwTrbXMBWcctzA3c3C9PGv2h6qwwwPTc+lJu/PjqtfZ+xDHm0/6JL/aYzaxsrBjIyyXEyN4WVQh5R5Z2GPWuvh6C4geK4SNWkChTAzBXuo1IZJIsncgAfetbXqOkQTjE0Mcg9HUH32zVB4r076Hfx3fJ/ZjGkJZR/s/KwIIA6IR1PlvWlWxZWzFim38rzJd3MSsEkZYHwMm2hXDN3gODzEjGPY+tc0GmtdTZgia4RFXlaF0jnjUeFQwc45tvMe+avPZlo69/fZxNbukaCTHgm2JY7/Fud/etC07SoIF5YYkjXrhFAH8utJVsOS+5IWIThXhsWyiRpbl5Cu/fTFwucEjAPLt64rPtf1Nr6drzn5LWEmG2dg3ds2R3khdQQmeiucj4fPNWztM1hyF062P19yDzEdY4hnnPsWwVH8XtUBoXFDQA2scCSwKCPo5Hd3MQA350kPLIucksD5k+VSKeFy2v0+dPEEXd30sccNvHC3eyO/LC4EluTJhYhGxyGVfjLD03xmtY4P0BbK1SBTzMPE7Hq7tux/H+WKpPZVoveyNqMkaoniW2RV5UAJ+skVfLmPhBx0BrUazVdlgXf2/BUKyybFxxMuDkW0O/pkRkf1uF/CtI1W/SCF5pDhI1LN8gP61m/ZFAz/TNSlABnkIXJGAAxd8H05mC/wAFWjzYyl1W8Qyd4v4TluHM6XtxCypsiMeQ8uT0BHiJ896ym243vUQt+UZO83BjdObGOmCQRk9MbVeYu0S4tZTDqUAxklZYsHw82xIBIIAxnGD7VctKmsbte+hWCT1IVeYH3BGQfnWlJ01z1dd3Ahl/Fsks8mjxT5aZwpk2G/eyoOg9gc1uArJNOf6bxEXH5u2U/I92pT7vHJn+GtcrFbJRXVfxKhSlK4FFKUoBSlKAVQe2bSjJYidNpLZxICOoU+FvwPK38FX6vO4hV1ZGAKsCrA9CCMEfhW6c8ElLcRlIfjOyWzgvZwoaVdgEBYuuzqDjqGBHXyqBk4m1bUMrY2/0eI9JX2bB8wTt/hBrx4HYWN5NpN0odebvbYsA2TjbGfNlAxj7SuOpqW1HtNjwIrWCSS5Yle6K45CCRhsdTt0H416JQwytGN9qb0sS5LWHC0rafJZXs/fM/Nh8HKZ3XBbJYqwBBNV7sh1VoHm0u5wssTkoCev64Geo6MPUNmuvhvha+luI77ULh1dd0hQ4C+zY2x7DPua8u0XQe+I1CwcG5tjiQRnLHk36D9Iuen2lJG+AKkWnenJ6+CY6zTq49X02O4heCUZSRSrD2Pp6EdQfI4qA4A4xjv4AcgTqB3if+cfsH/0q1152pQlZ5NGjE7aW4tO/sJXuFWDMjtAFMkkZ2VwWb6tWGzlQSGyete1jqq21wt3BDIltGqQXjGUSqyufq5OdSeZ4yfF18LAVb+0zQpJIhd22RcQK3wnDSRMpEsfQ5ON1yDgj3rv4Ys7STT447dQ1rJHjlO5IYEOG/azkH3zXoxq2Pfk168V8GSxRsCAQcgjIPrVI7QLeYTW9xF4+QOhiB8R5wMui/bZVB8ODsTXpwJdvBJJpU7EvbjmgYneWAnCH5r8J+Q9K/faDp4k+jyrN3U6S8sOc4cvsU8OSMgfF5VxccE7fbFOPsrtOQ3bRsTbM6mLrgnkHeEA/CObIxjqKuGuapHawSXExwka5PqfIAepJIAHqRVc7M7cJbyncF53LIf0bLhGXP2t1J5vPNV/jJptTuJbS23isxzyYP52bosYJ28Iz188+grSjjm29FqCpTXElx380kSzy3A55Qkh7y2QYMSKg3KgBSdiDsD5122ULagLeyCnnPilkJV+5hXwsY5B4x3mSvIxON/I1766zQuj3cYCIC2Of+3IuPC5mTYFpMKI+m9aD2e6G8MTXFwP7VdESTHzUY8EfyVdvnmuznZY/Dt+F7E6iz2dssUaxxqFRFCqB0AAwB+Fe1KrHH3FsdhbliQZnBESeZP6x9EXOSfkOpAryxi5uy1NFY7WtVeZ4dJtt5ZmBk/ZG5UH06Fz6KvvVkbRbUWq6UZOVTFycoYCR1z4mwc7scknHUmqzwPpK2McmqanJyzzbkyfEitjqOvO22QOgAG29d/FfAsOoMLuCdklZRyuG5kIA8OPNf4a9E3FWgnZLb1mes4V7JUjJa1u5oidt1UjHmDjGfvqOtOCJNMeXUJrhWWJHYBAVZ2IIQN5Yyfh9cUPE+q6X9VeQidD4Y5Aep6KOYfF8iM18421S4vms9MACTy8r3KrusZI5gD+6MuR7CtrlG7Npp7ctPUEt2I6UVglu3+Kd8A+qoTk/e5f/AAitLrm02xSCKOGMYSNQij2UYH31015ak8cnI0hSlKwBSlKAUpSgFKUoCg9q/C7XESXMBIuLfdMdXGebA/bBGV98jzr52b3VtdiS9Qct0yqlwvlzKNnUeQYb5Hy6g1O9ocROm3RUkMkZlUjqpiIlUj0IKA1jOm6tIjnUrUDnUYvYBsrKxHNIoG4jY7kjeN9/hNeylB1KWHdpw+7TLyZeu0HjvkLWdo6iTcSzE+GIeYB/X/pUD2ZalcLyR2dozq7811PI2xPTwnoMD5kmpPhDgLTrk/S0keWEnIhbAMbdSkm+WIJ+8YO/Wpfj7ixNOiFvbBBMwwqgbRL+sQPP0FTmpcnFXfWCO4s4Qmgn/KOlHllUkywr0bO7YXzz9qPz6jDdbJwTx7BfDuz9VcD4omPUjY8hPxDI6dR5isy4D1mWBy0atcXd04HIWPKqBsvI/wC0T09AK0fi/s9t7096pMFx1EqDqR0LjI5iMDxAhhgb1Z4ehUfZLj1BF0NZ/ZZ0y/NudrS9YvCfKKc/FH7K/UD129aiI+JNV0vw38Jurdf06bkD1LY9MfnAp/aNSWp8SaZq1q0BuBDI2DH3ngdHG6EEnlJz+qxrMaUo65xe1Z94uSXH+mPyR39sM3NoS6gfpIyPrYz65Xce4969tRddQso5YMMrFJQCcMQrZIDD4H2I5vWv1wHr7XMBjm2uYD3c49SPhcfsuBnPTOfSoXTpBpd/JbOQtndc00DHZYnG8sfoB5j5j3rLi2nB6rTs+5g9NW1eWysgiZe6uJCtspA5yZDzczgdWQHxH1Az1qe4P0BbK2SEZZ/jkc9XdviJJ677VA8HRNf3UmqygiMZis1OfCgJDSEeTOc//oFS3HOuPBEsMGPpVw3dQ56KT8Uh9FRTnPrio46Ulrt7fjiOsjSv5S1HHW0sH8XpLceQ91jB/wARq+1n9rxXpmlWyWyziUxjBEXjd26szEeEEnJ8TComTiHVtU8NjCbS3PWZzhiNujY9P7sH94VuVKUuqK2vIXLNxrx9BYgxr9dcnZYl3wTsOfHTrsvxHyHmIHhTg+aWb8paseaYkGOJvhjwfCSOgxnwp9nqcsdp3g/gC3ssSkma4O5lcbgnryDJ5c775LHzNdfHnDn021aJWKuPGmCQCy7gHHUH+XWpykI82G3WX3YCB7TdFvJQskBWWJFPPbsPi9WHmW/AjyrPeFuKJ7N3a2DNbr4nt5GGV6cxXz2Pnj51a+EO08IqQXysrKeQzeWRsA46hvU+1SnFuh6dIF1Pv+6CsGaSIg96OnIAOrnptv61uN4f25r5++IPbXuLLGSxjvnjEnK+YEkGG70ensOpIyMCvx2T8PsBJqNzvcXBJGRuisefOPsl9jjyUL71n2p6qJ2F9cRhYEylna+TlT5gfogd3I2Y4QZ3rUuyWR3sBNKxd5pZHZj1JD8n9EAx5ACrVhydKy2vPhxCd2XSlKV4jR8xX2lKAUpSgFKUoD4x22qmydpdlHI0VwJoJEOGV4iSD/7vmGMbg+Yq51TO0PgZL9O8jwlyg8LeTj9R/b0PVT7ZB6U8DlaehGd7cT6fdRvEl3AxkRk5S4DHmUj4WwfOsc4U0GaSzN7Z5F1bSMkkfUSoURiOX7WzMCvRgD5gVKcLaXp1xJ9Cv7Y294vhysjoshHly83IHxvsMN1HpWncI8Iw2AlWGSR1kYMQ5U8pUEbcqj+depyjQTUb3y10/gzqZJoN3LEzX2ljYD+1WWSSg8yo6tF15XHiQ7YIyK89Uso7qJrmx724llkBmVyGmhB2VQB8SFv0nTAA23xde0XhsQE6raSi3njPM/ksuSBsOnOdhjGH6HfeqpoHD93qEst/bvDaS/FEqZXvG6OQASVQkHLEMGORjGa6qUZrlL2+6Pf2+INC7OuDRZRc8gzcSDxnqFHXkHt6nzq61mWj9o8kEn0bVoWhlG3eBfA3lkqM7ftJzL1+GtGs7yOVBJE6OjdGVgVPyI2rw1oTUry27dhpHviqxrXAOn3JLPbqrHcvHlGJ9Ty4DfeDVnFK5xnKLvF2BmL9kIjPNaX88LeRIz92YzGcVw6t2b38ics2pLKi+L63nwMA77lsbE+dXbibitLRSZIblhuMpESu3qwOBn1rKZNUu7i3uY2mlNoEMiq3K8hXOFUumcKD1yfn1r1wrVWsTa7Wl5EaRaYOBdU5VUaqERVAXk5wAoG2ApXavVOyFZDzXd9POfPAAz5neQyHFVXUdVuraZLe6mmktoiPqk5Vd1zmNXzgnIAyM9PnWv8ADutLcoHSKaNcbd5GU/DPUfKpOrVirpq3UlwFji0XgPT7Yho7ZS46PJl2Hy58hf4QKs2KUzXllOUneTuUUrxurtI0Z5HVFUZLMwCj5k7Cs+1vtM53+jaXE11OejBT3a+4GxYDbfwr+1WqdKU+ig2cWvadb2N1cz3JjNncJk2+MyPLn9Gu3Lvk8+w8XUVUNUuxMiXF2ggs4wRaWaEgy42Jz1CfrTHy2Xc5q06T2ffSZJH1O5L3ToT3aOC0QJwrHG23kgHL161EcMaXFZ6osGqAs4CrbSOSYTg4Q4boPJQThG2xnBr303BXs7tfcuOpln5n4ZlayudTvl5W7rlt4AvKsQJCIeX7IAbwp5dTudpPhTtJtrOzgtEhmmlRWLBQoUFnZ23J5urHcLWqalbQyRss6o0RGXD45MKebxZ2wMZ39Kyq+vZNUkNhpUaw2akCaZUCqw9NgPB6L1fzwuc4hUVVNTWSz3JIaHdovH2o6jP3NpBDCo3kkfmkEa+uQUHMfJcb/IEjUrdCqgFixA3Y4yfc4AH4Co7hvQYbKBYIFwBuzH4nbzZj5k/yGANhUrXkqyjJ81WRpClKVzKKUpQClKUApSlAVXjfgqG/TP5udR9XKBvtuA3qufvHUeearw1xnNYyfQNWBUj83Od1YdBzN9pfR/ubBFapUXxBoEF5EYrhAw6qejIfVW6g/wBfPIrrCorYZq6812EaMm1vVF1PU1tbmT6PaROQqsSpmPQHPQFwfCf1Ttu1TnGWjzLL3ioiIgWG1MRZZCX8KIMfAFbLM3QrgY2qocb8B3FmoYlp7ZNgwG8aZzysN+Ubnf4evTOK9uEuLr6AN3aSXlrFgnmU88QOwIYcxXz2PMAB5DevXOCnFOm8ls+7e0zoSHFWoGTmsryRZzbBmeWOMiRCqrjvF6d2S27KRn02rtteCtvpWh6gVz1RmyhI2wTg7jHR1b5ipXTtZ0/UeZYphFJM0ZkidVV35CCVB+3zAAHBPSvzqvDs3f3cw7xmRQ1tHCTFnmwTl1xzsCrbNnr71wU5QeHTqengXU5xxrqll4dQsDIo/TQ9Mep5eZPxKfKpfTO1TTpcZkaInykQ4HzZeZf51D6RrmowxXEkpDrbIpkW4Kh+fk52CPFtj4cBhnxb11arqlg5P07TlLqql3WNX5eflI8Qw/2h0887bUbpt86P/L9mMy32fEdpMPqrm3f92VCfvGao2qdmWRNNa3TmaQN8XJ3bhzlkPKNgfI+WBX50ngbSrxZZI4yqiQqOSSXIx1DLL8LZzsBioeTgzQc+G/kTfGzR9fTeHrVjycW8Mmu75GZaNG7OhFMl5LdSG4Dc745eQk/ENxnl8utW+91+1h/O3MEf78qj+prK7fgbRHdV+nTOzHCqTHlifIfU1L3PAmkWzBGhuJX5DJyh3yQpwdoyuT/0pNU2+dJvu+RmTmp9p2mxZxMZT6RKx/zEBP8ANUG/aBf3fh03T3weksvT/wAI/wDOflVeu9TslMMtrYRQiNkk+tZQ0qyFkQgDmZgD4iM+QyKneJNWv+8kDvJHFCYg4thhSsh8Td4/iOBj4R61bU46R8X7IZnNccITSsJNZv2YgF1t4tzhdzygDGcH7KZ968rrW0hh7rT4Po0LKJWK+K4miz4n5hkJ4RszsW8sCpP8hLbvN3s3dxRuk9vczsSCGXDRM5YM24BwDn+lR1nxh3amy0mKS8lLM3eSIAiFySeVAAQnNnHMVUeppepUyWnguAyR6X1g2nhdQMqHlm+pUPlpoZSCyu7jndgNxgnFVbiriRtUuIllxb24J5SwyVU/G5OPEcIcAbZGNzV1tezGa55p9TuXedlIVUPhjz03xjbbwqAvXr1qL0Hsoneci9fEEZ5V5Wy0qjcBf7uPf55zjHWutOVKGbd2tvDeR3P1EbrWitvAZIdOhwjSPvJLyADcn4n2+HovVsnC1quh6NDaQrBAgRF/EnzLHqzHzJrpsrRIkWKJFRFGFVRgADyAr3ryVKuLJZLdx6zSQpSlciilKUApSlAKUpQClKUApSlAfCK5NN0uGBSsESRqzFyFGASep/lXZSgKpxJ2fWN5lni5JD1kiwrE+rDHK592BqtDhTWbL/Yr1biMdIpuvsBz5H4OnyrUKV1jWmlbVbnmSxkGo8W3CxvDqWlSqjYLvDkAkEHOSChPhH6Q18PFOjXMomeSaJywfDRBlDBQoOVRxsANs4zvitgxUZqHD1pP+etoJPd41J/EjNax0nrG3Y+NxZlQ4L4hsoLVIZb+2LhnJYygc3M7MD48HO+9Qz2dsJ4JIb62dEnEjlrqMkguzsd9w3iA2OMCrhN2caYxybVR+68ij8FcCuZuyzSz/u7f86X/AF1b0r3u/ImZUJb22t7uOb6bHMEnLti4DZDqyhuQndxzgHlJAVPLOKmuKuJdMlCn6fyOnMA0KGQ4YYIxyEfI+VTEfZhpY/3Yn5zS/wCuu+24F01PhsoD7unOfxfJqXo/m8i5mWQa/pYh+iwWc93IYu6ZwoRnXmyAeUlwfcLmp5bnXbvl7i1js1C8qvJ+cA9MuC3Qf3dalb2yRjljRUHooAH4CvWq60dkfHP4FjNrDsqWR++1G6lupPTLBRny5iS+P3So9qvumaXDboI4IkjQeSAAfM+p9zXZSuc6s59JiwpSlcyilKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUB//9k="></img>
		     <span id="college_name"><a target="_blank" href="http://www.nih.nic.in/">NATIONAL INSTITUTE OF HOMOEOPATHY</a>
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
		    <p> NATIONAL INSTITUTE OF HOMOEOPATHY was established on 10th December 1975 in Kolkata as an Autonomous Organisation under the Ministry of Health & Family Welfare, Govt. of India. Presently, it is under the Ministry of AYUSH, Govt. of India.

          The Institute , affiliated to the West Bengal University of Health Sciences, presently conducts the degree course in Homoeopathy viz Bachelor of Homoeopathic Medicine and Surgery [B.H.M.S.] since 1987 and Post - Graduate course i.e. Doctor of Medicine in Homoeopathy [M.D.(Hom.)] in six subjects viz Organon of Medicine, Repertory, Materia Medica,Practice of Medicine, Paediatrics and Homoeopathic Pharmacy since 1998-99 onwards.

          Today it consists of an Undergraduate and Postgraduate sections with an auditorium of 800 seating capacity, a hospital having an outpatient dept. and a 100 bedded inpatients dept. along with investigative facilities.

          The Institute is functioning in its own campus measuring about 16 acres of land at Block - GE, Sector - III, Salt Lake, Kolkata - 700 106, with a total floor space of about 1.8 lakh square metres with effect from 11.08.1986.

          A 250 - seated Boys Hostel, a 70 - seated Girls Hostel and a Guest House are also available in the same campus. We also have a Staff Quarters on a plot of land measuring about 9 acres close to the Institute campus within Salt Lake (Block JC).

 <br><br>
	    	    <span style="float:right;">NATIONAL INSTITUTE OF HOMOEOPATHY<br>
                 BLOCK - GE, SECTOR - III, SALT LAKE<br>
		        Kolkata-700106<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://www.nih.nic.in/pages/display/121-about-us">Read more</a>
		    </p>
		</div>
		
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Academic Departments</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Anatomy</h1>
    		    <p>
				The renovation and extension work of the department of Anatomy is near completion.

Sufficient numbers of charts, models, bone sets, skeletons, mounted specimens (viscera’s, dissected regions and parts) are available to conduct both lectures as well as demonstration classes for the students. Sufficient numbers of dead bodies (dissected and un-dissected) are preserved in the department. A good number of Histological slides, projection slides, over head project sheets, 3D charts, laminated pictures, CD’s, CPR’s are available in the department.

 
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/40-anatomy">Read more</a>
    		    </p>
    		    
				<h1 class="course_name">Department of Physiology & Biochemistry</h1>
    		    <p>The Department is located on the 3rd floor of the Academic wing. It has one Physiology Practical class room, one Biochemistry Practical class room, one room for Professor, one room for Reader and one room for lecturer and one room is being used as store. The well equipped laboratory has been newly renovated to accommodate 50 students at a time to cater the need of increasing number of students at UG level from 2009-10. The departmental library has adequate collection of books required for day-to-day teaching as well as reference work.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/43-physiology-biochemistry">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Organon of Medicine, Chronic Diseases, Homoeopathic Philosophy & Psychology</h1>
    		    <p>
				Organon of Medicine and Chronic Diseases are the core areas of Homoeopathy and the department is justifying itself by its multifarious activities which helps in enhancing the academic standards of the Institute besides being involved in the routine activities. It is also strong in History of Medicine. The Department provides students of undergraduate course and post graduate trainees with a strong foundation in this pivotal subject which gives the philosophical support and is the backbone of this system and also develop intellectual and analytical skills that the student may take with them into their professional life. Sharing ideas and critiquing each other work ultimately enables everyone in the department to grow.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/44-organon-of-medicine,-chronic-diseases,-homoeopathic-philosophy-psychology">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of MATERIA MEDICA & HOMOEOPATHIC THERAPEUTICS</h1>
    		    <p>
				The department conducts Theoretical, Clinical and Tutorial classes both in Undergraduate and Post Graduate level.  The department participates in weekly seminars, clinical and group discussions, workshops organized in the Institution. Two new teachers   joined the department in the rank of lecturer.14th Batch PGTs have successfully completed their Part-I examination. All nine seats are filled in Materia Medica Department of 16th batch PGTs. The students are taught to be self-relianced under the constant guidance of teachers.

				The department organized different lecture programmes, discussions & seminars in which the PG students and the faculty members participated and had discussions.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/45-materia-medica-homoeopathic-therapeutics">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Organon of Medicine, Chronic Diseases, Homoeopathic Philosophy & Psychology</h1>
    		    <p>
				Organon of Medicine and Chronic Diseases are the core areas of Homoeopathy and the department is justifying itself by its multifarious activities which helps in enhancing the academic standards of the Institute besides being involved in the routine activities. It is also strong in History of Medicine. The Department provides students of undergraduate course and post graduate trainees with a strong foundation in this pivotal subject which gives the philosophical support and is the backbone of this system and also develop intellectual and analytical skills that the student may take with them into their professional life. Sharing ideas and critiquing each other work ultimately enables everyone in the department to grow.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/44-organon-of-medicine,-chronic-diseases,-homoeopathic-philosophy-psychology">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of CASE TAKING AND REPERTORISATION</h1>
    		    <p>
				The subject of Repertory is taught to both Post Graduate and Undergraduate level. In the under graduate level the subject is being taught in the 4th B.H.M.S. There are nine seats available

for P.G., in repertory. 

The teaching of the subject aims at providing thorough knowledge in case taking; analysis of different aspect of the case and utility of various repertories in different types of cases.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/55-case-taking-and-repertorisation-">Read more</a>
    		    </p>
				
			<h1 class="course_name">Department of HOMOEOPATHIC PHARMACY</h1>	
			<p>
				The Department of Homoeopathic pharmacy conducts regular classes for the BHMS students as well as MD(Hom) students as per the syllabus and curriculum of Central Council of Homoeopathy (www.cchindia.com), New Delhi and the courses are affiliated to the West Bengal University of Health Sciences (www.wbuhs.org).  The PG division has an admission capacity of three Post Graduate Trainees per year. 
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/56-homoeopathic-pharmacy-">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Practice of Medicine & Paediatrics</h1>	
			<p>
				The Department is an integrated unit for both undergraduate and   postgraduate courses of the affiliating university in the speciality of Practice of Medicine. The subject of Paediatrics at undergraduate level is covered by this Department; while there is a separate Department of Paediatrics for postgraduate course. The Department is now functioning from the New Academic cum Library Building and constraint of space is no longer a problem.  
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/57-practice-of-medicine-paediatrics">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Paediatrics (PG)</h1>	
			<p>
				 The department is functioning as a separate department as per the regulations of CCH, New Delhi since 2009 when the MD (Hom) course in the subject Paediatrics is introduced here at NIH.

            The intake capacity for MD (Hom) in the subject is three (03) per session.   There is one full time contractual Lecturer, one Guest Professor and one part-time Guest Lecturer available in the department. One full time professor is looking after the department as in-charge of the department and coordinating the activities of the department.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/58-paediatrics-(pg)">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Surgery</h1>	
			<p>Statistical Data- Department of Surgery performed 59 cases of surgery during the calendar year 2014-15.
Activities of the Department: Besides theory and practical classes held for the 3rd and 4th year students as per schedule in IPD, OPD, Class rooms and Operation theatre, students and interns are being acquainted with the basic concepts and techniques in Surgery through live demonstration in the IPD and in Operation theatres.
				
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/59-surgery">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Obstetrics and Gynaecology</h1>	
			<p>
				The Department of Obstetrics and Gynaecology is involved in teaching of 2nd and 3rd B.H.M.S. students. The department has one full-time lecturer and one guest faculty.

           There are 6 charts, 14 specimens, 67 instruments, 3 dummy fetus, 2 fetal skulls, 6 contraceptives and 9 models available in the department. Classes are takes as per the norms of C.C.H. and WBUHS. Besides this, the department also participates in the weekly seminars. Students are trained in O.P.D., I.P.D. & O.T. The subject is being taught by making proper integration of knowledge of the subject proper with the knowledge of Homoeopathy. Interns are being guided to carry-out their dissertation work under the guidance of departmental teachers. P.G.T.s, who have their dissertation on gynecological topics, are being trained and helped to carry out their work. Department of Obstetrics & Gynaecology performed Surgery as far Gynaecological cases.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/60-obstetrics-and-gynaecology">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Community Medicine</h1>	
			<p>
				  The Department of Community Medicine is involved in teaching of 4th BHMS students as well as research methodology and bio-statistics for PG students. The Department has one museum (for practical demonstration), where different instruments, models and charts related to different subject matters of PSM (e.g. family planning, nutrition, immunization, medical entomology, public health, etc.) is preserved for practical classes. All the classes, both theory and practical, are guided by the CCH regulation and in accordance with the curriculum prescribed by the University.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/61-community-medicine">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Forensic Medicine & Toxicology</h1>	
			<p>
				 The Dept. of Forensic Medicine and Toxicology is headed by a full-time Professor assisted by a full time Reader. Regular theoretical, practical and tutorial classes for 2nd BHMS students are taken by the faculties. The teachers of the department are also involved in patient care and training of interns as well as PGTs’ in the hospital OPD and IPD.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/62-forensic-medicine-toxicology">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Pathology, Bacteriology & Parasitology</h1>	
			<p>
				1. About: The Department of Pathology and Microbiology of National Institute of Homoeopathy, Kolkata is well-equipped department for the IIND B.H.M.S. students under W.B.U.H.S.

2. Milestones/Important events: I.ROTP in Pathology                   &Microbiology module-III     (07/03/2011 to 12/03/2011)

                     II. Inauguration of Upgradation of pathology             Department by inducting Microbiology laboratory in                             The Department on 06/02/2015 at 3pm. 
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/63-pathology,-bacteriology-parasitology">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Library & Information Services</h1>	
			<p>
				 The Library & Information Services division provides the information system which is taken care of by efficient library staff. At present, there are more than 21000 books and 57 subscribed journals in the library. Institute has its own website, http://www.nih.nic.in developed in the year 2002. Current Awareness Services (CAS) and Flash (Internet information on homoeopathy world) are provided and partial automation has been achieved through WINISIS software and newly launched LIBSYSsoftware for total automation of library documents. One archive for rare books, including some rare non-English (German, Spanish etc.) books, is available as reference books.
    		          <br>
    		        <a target="_blank" href="http://www.nih.nic.in/pages/view/42/64-library-information-services">Read more</a>
    		    </p>
				
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="http://www.nih.nic.in/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name"></h1>
                <p>Notice for admission:


                    <a target="_blank" http://www.nih.nic.in/">Read more</a>
                </p>
            </div>
            
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '34'";
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
					$sql1 = "SELECT * FROM colleges where id = '34'";
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