<html oncontextmenu="return false;">
	<head>
		<style>
			body {
				-webkit-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				-ms-user-select: none;
				-mso-user-select: none;
				-atsc-user-select: none;
				-khtml-user-select: none;
				-wap-user-select: none;
				background-repeat: no-repeat;
				background-position: center top;
				background-size: cover;
				background-color: #a5dce8;
			}
			button {
				width: 25%;
				border: none;
				outline: none;
				background-color: transparent;
				cursor: pointer;
				padding: 14px 16px;
				border-radius: 4px;
				border: 3px solid white;
				font-size: 28px;
				transition: 2s;
				text-align: center;
			}
			button:hover {
				border: 3px solid gray;
			}
			button#a {
				position: absolute;
				left: 20%;
				bottom: 22%;
			}
			button#b {
				position: absolute;
				right: 20%;
				bottom: 22%;
			}
			p {
				font-size: 40px;
				text-shadow: 0px 0px 10px gray;
				color: rgb(40, 40, 40);
				transition: 5s;
				position: absolute;
				left: 20%;
				right: 65%;
				bottom: 30%;
			}
			p:hover {
				text-shadow: 0px 0px 2px black;
				cursor: pointer;
				animation-name: test;
				animation-duration: 5s;
			}

			@Keyframes test {
				0% {
					font-style: normal;
				}
				100% {
					font-style: italic;
				}
			}
		</style>
		<title>Error - 404</title>
	</head>
	<body>
		<p>Запрошенная вами страница <br>не существует или никогда не существовала!</p>
		<br><br>
		<button onclick="javascript:history.back()" id="a">Вернуться на последнюю страницу</button><button onclick="javascript:location.reload()" id="b">Перезагрузить</button>
	</body>
</html>
