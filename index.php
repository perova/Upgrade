<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Language" content="En" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Author" content="vizyDay.com" />

    <meta name="Revisit-after" content="1 Days" />
    <meta name="Robots" content="index, follow" />
    <meta name="Distribution" content="global" />

    <meta name="Rating" content="general" />
    <title>vizyDay</title>
    <meta name="Description" content="vizyDay.com – a place where you can connect with your friends and various people from your country and the World !" />
    <meta name="Keywords" content="world social networks, social network, people, friends, followers, pages, groups" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="/css/cascadeDIV.css" />
    <meta name="viewport" content="width=320, initial-scale=1" />
</head>

<body onload="NotifyNewNotifications( 0 ); window.setInterval( function(){ NotifyNewNotifications( 0 ) }, 60000 )" style="padding:0px; margin:0px; background-color: rgb(234,217,98); 
	                    font-family: Arial, " Times New Roman ", Times, serif;">
    <script src="/javaScriptConstants.js" type="text/javascript"></script>
    <script src="/javaScriptFunctions.js" type="text/javascript"></script>
    <script>
        var timeOut, connectionDivRemoveTimeOut;
    </script>
    <div id="oneIncheDiv" style="height: 10ex; left:0px; bottom:0px; position:fixed; 
	                                      background-color: transparent; z-index:2"></div>
    <div id="cookiesDivId" style="position:fixed; bottom:0px; left:0px; width:100%; text-align:center; background-color:yellow; 
    	                                       text-color:black; z-index:10;">
        <a href="javascript: void(0)" class="linkSimple" onclick='window.open( "/rulesVizyDay.html", "name")'>

            <span class="bolderSpan">Cookies are used !</span></a>
    </div>
    <div id="cookiesCloseDivId" style="position:fixed; bottom:0px; right:0px; background-color:yellow; text-color:black; 
    	                   z-index:11; cursor: pointer;" onclick="RemoveDiv( 'cookiesCloseDivId' );RemoveDiv( 'cookiesDivId' );
    	                                                  ReloadPageWithNewParam( 'cookiesAppr=1' );">X</div>
    <div id="transparentScreenId" class="TransparentBlackScreenDIV"></div>
    <div id="TopBarFixedId" class="TopBarFixed" style="position: fixed;">
        <div id="TopBarCommandsId" class="TopBarCommands">
            <a href="/?mob=0"><img style="height:20px;" src="http://www.vizyday.com/vizyDayIconPng32X32.png"></a>&nbsp;<a style="color:rgb(0,150,0); background-color:yellow;" href="/?mob=0">vizyDay</a>&nbsp;&nbsp;&nbsp;
            <form style="display:inline;" name="LogIn" method="POST" action="/index.php">
                <input type="hidden" name="mob" value=0><span class="bolderSpan">Email address:</span>&nbsp;&nbsp;
                <input name="email" type="text" size="20" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bolderSpan">Password:</span>&nbsp;&nbsp;
                <input name="password" type="password" size="20">
                <input type="hidden" name="stream" value=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="buttonSend" name="logIn" type="submit" value="Log In">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="simpleLinkClass" href="/index.php?remindPassword=1&mob=0">Remind password</a></form>
            <div style="display:inline;"><span class="TextSpan">&nbsp;&nbsp;&nbsp</span><a class="simpleLinkClass" href="/index.php?registrForm=1&mob=0" rel="nofollow"><span class="bolderSpan">Sign Up</span></a></div>
        </div>
        <!--TopBarCommandsId-->
    </div>
    <!--TopBarFixed-->
    <div class="container">
        <div class="LeftSideDIV"></div>
        <!--end LeftSideDIV-->
        <div id="centerDivId" class="CenterDIV">
            <br><span class="bolderSpan">People</span>
            <br>
            <br>
            <table BORDER=0 style="text-align:center; margin-left:auto; margin-right:auto;" class="pagesNumbersTable">
                <tr>
                    <td>1&nbsp</td>
                    <td><a href="/index.php?people=1&screenPage=2" class="simpleLinkClass">|2|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=3" class="simpleLinkClass">|3|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=4" class="simpleLinkClass">|4|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=5" class="simpleLinkClass">|5|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=11" class="simpleLinkClass">|11|&nbsp</a></td>
                </tr>
            </table>
            <br>
            <table border=0 style="margin-left:10px">
                <tr>
                    <td>
                        <a href="/people/Frontas"><img src="http://www.vizyday.com/foto/min/478.jpg"></a>
                    </td>
                    <td><a href="/people/Frontas" class="simpleLinkClass">Valstybinis Tautos Frontas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">178</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Arnas-Drabikas"><img src="http://www.vizyday.com/foto/min/422.jpg"></a>
                    </td>
                    <td><a href="/people/Arnas-Drabikas" class="simpleLinkClass">Arnas Drabikas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">100</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Auste-Telycenaite"><img src="http://www.vizyday.com/foto/min/459.jpg"></a>
                    </td>
                    <td><a href="/people/Auste-Telycenaite" class="simpleLinkClass">Auste Telycenaite</a><span class="articleSmallWordsClass9">( <span class="textSpan11">75</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Kornelijus-Kliporavicius"><img src="http://www.vizyday.com/foto/min/426.jpg"></a>
                    </td>
                    <td><a href="/people/Kornelijus-Kliporavicius" class="simpleLinkClass">Kornelijus Kliporavičius</a><span class="articleSmallWordsClass9">( <span class="textSpan11">69</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Morkunas"><img src="http://www.vizyday.com/foto/min/565.jpg"></a>
                    </td>
                    <td><a href="/people/Morkunas" class="simpleLinkClass">Petras Morkunas Morkunas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">61</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Euzebijus-Gerbereckauskas"><img src="http://www.vizyday.com/foto/min/747.jpg"></a>
                    </td>
                    <td><a href="/people/Euzebijus-Gerbereckauskas" class="simpleLinkClass">Euzebijus Gerbereckauskas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">55</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Varnelis-Skvernelis"><img src="http://www.vizyday.com/foto/min/762.jpg"></a>
                    </td>
                    <td><a href="/people/Varnelis-Skvernelis" class="simpleLinkClass">Varnelis Skvernelis</a><span class="articleSmallWordsClass9">( <span class="textSpan11">53</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Duru-Rankena"><img src="http://www.vizyday.com/foto/min/920.jpg"></a>
                    </td>
                    <td><a href="/people/Duru-Rankena" class="simpleLinkClass">Duru Rankena</a><span class="articleSmallWordsClass9">( <span class="textSpan11">51</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Juozas-Mozaika"><img src="http://www.vizyday.com/foto/min/782.jpg"></a>
                    </td>
                    <td><a href="/people/Juozas-Mozaika" class="simpleLinkClass">Juozas Mozaika</a><span class="articleSmallWordsClass9">( <span class="textSpan11">51</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Antans-Levanaitis"><img src="http://www.vizyday.com/foto/min/646.jpg"></a>
                    </td>
                    <td><a href="/people/Antans-Levanaitis" class="simpleLinkClass">Antans Levanaitis</a><span class="articleSmallWordsClass9">( <span class="textSpan11">48</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Tomas-Janauskas" class="simpleLinkClass">Tomas Janauskas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">45</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Viktoras-Beliasas"><img src="http://www.vizyday.com/foto/min/738.jpg"></a>
                    </td>
                    <td><a href="/people/Viktoras-Beliasas" class="simpleLinkClass">Viktoras Beliašas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">45</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Drabas-Arnikas"><img src="http://www.vizyday.com/foto/min/1251.jpg"></a>
                    </td>
                    <td><a href="/people/Drabas-Arnikas" class="simpleLinkClass">Drabas Arnikas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">43</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Mark-Zuckerberg" class="simpleLinkClass">Mark Zuckerberg</a><span class="articleSmallWordsClass9">( <span class="textSpan11">43</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Igoris-Kisielius"><img src="http://www.vizyday.com/foto/min/749.jpg"></a>
                    </td>
                    <td><a href="/people/Igoris-Kisielius" class="simpleLinkClass">Igoris Kisielius</a><span class="articleSmallWordsClass9">( <span class="textSpan11">42</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Ramunas-Karbauskis" class="simpleLinkClass">Ramunas Karbauskis</a><span class="articleSmallWordsClass9">( <span class="textSpan11">39</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Andrius-Uzkalnis" class="simpleLinkClass">Andrius Užkalnis</a><span class="articleSmallWordsClass9">( <span class="textSpan11">38</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Enorca-Enorca"><img src="http://www.vizyday.com/foto/min/1088.jpg"></a>
                    </td>
                    <td><a href="/people/Enorca-Enorca" class="simpleLinkClass">Enorca Enorca</a><span class="articleSmallWordsClass9">( <span class="textSpan11">38</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Amazon-WebServices"><img src="http://www.vizyday.com/foto/min/550.jpg"></a>
                    </td>
                    <td><a href="/people/Amazon-WebServices" class="simpleLinkClass">Amazon WebServices</a><span class="articleSmallWordsClass9">( <span class="textSpan11">37</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Tom-Lee" class="simpleLinkClass">Tom Lee</a><span class="articleSmallWordsClass9">( <span class="textSpan11">36</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Lukas-Sh" class="simpleLinkClass">Lukas Sh</a><span class="articleSmallWordsClass9">( <span class="textSpan11">33</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Asdasd-Asdasd" class="simpleLinkClass">Asdasd Asdasd</a><span class="articleSmallWordsClass9">( <span class="textSpan11">31</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Egle-Kavaliauskaite"><img src="http://www.vizyday.com/foto/min/543.jpg"></a>
                    </td>
                    <td><a href="/people/Egle-Kavaliauskaite" class="simpleLinkClass">Egle Kavaliauskaite</a><span class="articleSmallWordsClass9">( <span class="textSpan11">30</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/index.php?showUserId=29" class="simpleLinkClass">&lt;i&gt;Mykolas&lt;/i&gt; &lt;b&gt;Stasiunas&lt;/b&gt;</a><span class="articleSmallWordsClass9">( <span class="textSpan11">29</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Lauryniux-Laurinovich" class="simpleLinkClass">Lauryniux Laurinovich</a><span class="articleSmallWordsClass9">( <span class="textSpan11">29</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Rimantas-Sk" class="simpleLinkClass">Rimantas Sk</a><span class="articleSmallWordsClass9">( <span class="textSpan11">29</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Artur-Bandzyt" class="simpleLinkClass">Artur Bandzyt</a><span class="articleSmallWordsClass9">( <span class="textSpan11">28</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Barmalejus-Uzusalis"><img src="http://www.vizyday.com/foto/min/979.jpg"></a>
                    </td>
                    <td><a href="/people/Barmalejus-Uzusalis" class="simpleLinkClass">Barmalėjus Užusalis</a><span class="articleSmallWordsClass9">( <span class="textSpan11">28</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="/people/Tvisto-Fanas" class="simpleLinkClass">Tvisto Fanas</a><span class="articleSmallWordsClass9">( <span class="textSpan11">28</span> connections )</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/people/Igne-IgneVru"><img src="http://www.vizyday.com/foto/min/755.jpg"></a>
                    </td>
                    <td><a href="/people/Igne-IgneVru" class="simpleLinkClass">Igne IgneVru</a><span class="articleSmallWordsClass9">( <span class="textSpan11">27</span> connections )</span>
                    </td>
                </tr>
            </table>
            <table BORDER=0 style="text-align:center; margin-left:auto; margin-right:auto;" class="pagesNumbersTable">
                <tr>
                    <td>1&nbsp</td>
                    <td><a href="/index.php?people=1&screenPage=2" class="simpleLinkClass">|2|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=3" class="simpleLinkClass">|3|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=4" class="simpleLinkClass">|4|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=5" class="simpleLinkClass">|5|&nbsp</a></td>
                    <td><a href="/index.php?people=1&screenPage=11" class="simpleLinkClass">|11|&nbsp</a></td>
                </tr>
            </table>
            <br>
            <br />
        </div>
        <!--end CenterDIV-->
        <div class="RightSideDIV"></div>
    </div>
    <!--end Container-->
    <table border="0" class="leftMenuTable">
        <tr>
            <td height="30"></td>
        </tr>
        <tr>
            <td align="center">
                <a href="/index.php?people=1&mob=0" class="linkSimple">
                    <span class="bolderSpan">People</span></a>&nbsp;&nbsp;&nbsp;

                <a href="/index.php?groups=1&mob=0" class="linkSimple">
                    <span class="bolderSpan">Groups</span></a>&nbsp;&nbsp;&nbsp;

                <a href="/index.php?showAllPages=1&mob=0" class="linkSimple">
                    <span class="bolderSpan">Pages</span></a>&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td height="30"></td>
        </tr>
        <tr>
            <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="javascript: void(0)" class="linkSimple" onclick='window.open( "/rulesVizyDay.html", "name")'>

                    <span class="bolderSpan">Rules</span></a>&nbsp;&nbsp;&nbsp;
                <a href="javascript: void(0)" class="linkSimple" onclick='window.open( "/questions.php", "name")'>
                    <span class="bolderSpan">Contacts</span></a>&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td height="30"></td>
        </tr>
        <tr>
            <td class="tdTip"><span class="bolderSpan">
					                           Copyright © 2017 vizyDay.com All Rights Reserved &nbsp;&nbsp;&nbsp;</span></td>
        </tr>
        <tr>
            <td height="30"></td>
        </tr>
    </table>
</body>

</html>