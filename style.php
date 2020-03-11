<?php

header("Content-type: text/css");
?>
body{
    background-color: darkslategray;
}
#iniciosesion{
	background: linear-gradient(to right, #67b26b, #4ca2cb) !important;
	padding-top: 10px;
}
#contenido{
    width: 17%;
	margin: 0 auto;
    border-style: double;
  border-width: 5px;
    border-color: white;

	text-align:left;
	padding-bottom: 6px;
}
#contenido2{
    width: 35%;
	margin: 50px auto;
}
h1{
	text-align: center;
	text-transform: uppercase;
    color: white;
}
h2{
	text-align: center;
}
.botoniniciosesion{
	background-color: orange;
	color: white;
	border-radius: 5px 5px 5px 5px;
margin-left: 15px;
}
#contenido a{
	color: orange;
}
.nombreiniciosesion{
	color: orange;
	font-weight: bold;
}

p{
    color: white;
	font-weight: bold;
	margin: 2px 15px;
}

.entradas{
	margin-bottom: 8px;
	margin-left: 15px;
}

.sesioniniciada{
	font-weight: normal;
}
#encabezadoreg{
    background: linear-gradient(to right, #67b26b, #4ca2cb) !important;
	padding-top: 1px;
	color: white;
	font-size: 15px;
	text-align: center;
}
.catlinks{
	color: blue;
	text-decoration-line: none;
	font-weight: bold;
    color: white;
}
.catlinks2{
	color: blue;
	text-decoration-line: none;
	font-weight: bold;
    color: white;
}
.contar{
	color: blue;
	font-weight: bold;
    color: white;
}

.edit a{
    float: right;
    padding-right: 10px;
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-size: 24px;
 
}

.edit a:hover{
     opacity: 0.7;
}

.email_confirmation{
    float: left;
    padding-left: 10px;
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-size: 24px;
 
}

.email_confirmation:hover{
     opacity: 0.7;
}

.olvidado a{
    color: white;
}

[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
    text-decoration: none;
    color: white;
    font-size: 18px;
}

[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
}

[data-tooltip]:before {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -55px;
  padding: 7px;
  width: 100px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #000;
  background-color: cornflowerblue;
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;

}

[data-tooltip]:after {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid #000;
  border-top: 5px solid cornflowerblue;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
}

[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  opacity: 1;
}

#mimsg{
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
    width: 40%;
    position: fixed;
    bottom: 20px;
    font-size: 25px;
}

.example_e {
   color: #FFFFFF;
   text-transform: uppercase;
   font-size: 18px;
   padding: 20px;
   cursor: pointer;
    text-decoration: none;
}
.example_e:hover {
text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
}
.table_header,label{
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
}

.table_header2{
    color: white;
    font-size: 20px;
    font-weight: bold;
}

.table_header3{
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding-bottom: 0px;
}

td, th {
  border: 1px solid #437070;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #437070;
}

.btn {
  background: darkslategray;
  border: none;
  color: white;
  font-size: 22px;
  cursor: pointer;
  float: right;
}

.btn:hover {
  text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
}

.tooltip:hover {
    opacity: 0.5;
    cursor: help;
}

[data-title]:hover:after {
    opacity: 1;
    transition: all 0.1s ease 0.5s;
    visibility: visible;
}
[data-title]:after {
    content: attr(data-title);
    background-color: black;
    color: #fff;
    position: absolute;

  border-radius: 6px;
    padding: 10px 20px;
    bottom: -1.6em;
    left: 100%;
    white-space: nowrap;

    
    z-index: 1;
    visibility: hidden;
}
[data-title] {
    position: relative;
}

.tooltip {
    display:inline-block;
    position:relative;
    border-bottom:1px dotted #666;
    text-align:left;
}

.tooltip .right {
    min-width:350px; 
    top:50%;
    left:100%;
    margin-left:20px;
    transform:translate(0, -50%);
    padding:10px 20px;
    color:#000000;
    background-color:#FFFFFF;
    font-weight:normal;
    font-size:13px;
    border-radius:8px;
    position:absolute;
    z-index:99999999;
    box-sizing:border-box;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
    visibility:hidden; opacity:0; transition:opacity 0.8s;
}

.tooltip:hover .right {
    visibility:visible; opacity:1;
}

.tooltip .right i {
    position:absolute;
    top:50%;
    right:100%;
    margin-top:-12px;
    width:12px;
    height:24px;
    overflow:hidden;
}

.tooltip .right i::after {
    content:'';
    position:absolute;
    width:12px;
    height:12px;
    left:0;
    top:50%;
    transform:translate(50%,-50%) rotate(-45deg);
    background-color:#FFFFFF;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
}
		









