<?php

function aaa_replace($url)
{
    $fp = @fopen($url, 'r') or die('timeout'); //判断网页能否打开
    $fcontents = file_get_contents($url);

    $fcontents = str_replace('="/', '="http://www.ceec.net.cn/', $fcontents);
    $fcontents = str_replace("='/", "='http://www.ceec.net.cn/", $fcontents);
    $fcontents = str_replace("=\'/", "=\'http://www.ceec.net.cn/", $fcontents);
    $fcontents = str_replace("='./", "='http://www.ceec.net.cn/", $fcontents);

    //路由跳转
    $fcontents = str_replace('http://www.ceec.net.cn/art', 'http://www.ddd.com/aaa.php?/art', $fcontents);
    $fcontents = str_replace('http://www.ceec.net.cn/col', 'http://www.ddd.com/aaa.php?/col', $fcontents);
    $fcontents = str_replace('http://www.ceec.net.cn/module', 'http://www.ddd.com/aaa.php?/module', $fcontents);

    //js路由处理
    $fcontents = str_replace("<script language='javascript' src='http://www.ceec.net.cn/script/0/1508201140434866.js'>", '<script language="javascript">
        function go2GB() { 
            var url = "ht"+"tp"+"://www.ceec.net.cn/";
            window.top.location = url; 
            } 
            function go2BIG5() { 
            var url = "/gtb/" +"index."+"jsp?url=ht"+"tp"+"://www.ceec.net.cn/"; 
            window.top.location = url; 
            }
            document.writeln("<style type=\"text\/css\">");
            document.writeln(".top{text-decoration:none; color:#878787; font-size:12px; line-height:180%;}");
            document.writeln("<\/style>");
            document.writeln("<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" height=\"28\" >");
            document.writeln("  <tr>");
            document.writeln("	<td width=\"65\" align=\"center\"><a class=\"top\"  href=\"http://www.ddd.com/aaa.php\">简体版<\/a><\/td>");
            document.writeln("	<td width=\"1\" style=\"color:#b3b3b3\">|<\/td>");
            document.writeln("	<td width=\"65\" align=\"center\"><a class=\"top\"  href=\"http://www.ddd.com/bbb.php?/gtb/index.jsp?url=http://www.ceec.net.cn/\">繁体版<\/a><\/td>");
            document.writeln("	<td width=\"1\" style=\"color:#b3b3b3\">|<\/td>");
            document.writeln("<td width=\"65\" align=\"center\"><a class=\"top\" href=\"http://www.ddd.com/bbb.php\" style=\"font-family:Arial, Helvetica, sans-serif;\" target=\"_blank\">English<\/a><\/td>")
            document.writeln("  <\/tr>");
            document.writeln("<\/table>")</script>', $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://www.ceec.net.cn/script/0/1508201548022266.js'>", '<script language="javascript">
        document.writeln("<table height=\"40\" cellspacing=\"0\" cellpadding=\"0\" align=\"right\" border=\"0\">");
        document.writeln("    <tbody>");
        document.writeln("        <tr>");
        document.writeln("            <td background=\"\/picture\/0\/1402181403086467356.jpg\" width=\"50\" align=\"center\"><a class=\"white\" href=\"\http://www.ddd.com/aaa.php\">首页<\/a><\/td>");
        document.writeln("            <td width=\"95\" align=\"center\"><a class=\"white\" href=\"\http://www.ddd.com/aaa.php?/col\/col10986\/index.html\">企业推介<\/a><\/td>");
        document.writeln("            <td width=\"95\" align=\"center\"><a class=\"white\" href=\"\http://www.ddd.com/aaa.php?/col\/col10987\/index.html\">主营业务<\/a><\/td>");
        document.writeln("            <td width=\"95\" align=\"center\"><a class=\"white\" href=\"\http://www.ddd.com/aaa.php?/col\/col10988\/index.html\">新闻资讯<\/a><\/td>");
        document.writeln("            <td width=\"115\" align=\"center\"><a class=\"white\" href=\"\http://www.ddd.com/aaa.php?/col\/col10989\/index.html\">投资者关系<\/a><\/td>");
        document.writeln("            <td width=\"95\" align=\"center\"><a class=\"white\" href=\"\http://www.ddd.com/aaa.php?/col\/col10990\/index.html\">在线服务<\/a><\/td>");
        document.writeln("        <\/tr>");
        document.writeln("    <\/tbody>");
        document.writeln("<\/table>")</script>', $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://www.ceec.net.cn/script/0/1508181946315441.js'></script>", '<script language="javascript">
        // JavaScript Document
        function hello(){
        var q = document.qForm.q.value;
        if(q==" "){
        alert("请输入关键字!");
        return false;
        }else{
        document.qForm.submit();
        }
        }
        document.writeln("<div style=\"border-bottom: #e3e3e3 1px solid; border-left: #e3e3e3 1px solid; width: 130px; float: left; height: 22px; border-top: #e3e3e3 1px solid; border-right: #e3e3e3 1px solid;margin-right:5px;\">");
        document.writeln("<form method=\"get\" action=\"/jsearch\/search.do\"  target=\"_blank\" name=\"qForm\">");
        document.writeln("    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"line-height: 20px\">");
        document.writeln("        <tbody>");
        document.writeln("            <tr>");
        document.writeln("                <td width=\"9\"></td>");
        document.writeln("                <td width=\"100\"><input id=\"q\" style=\" border-bottom: 0px; border-left: 0px; padding-bottom: 0px; line-height: 18px; width: 100px; padding-right: 0px; float: left; height: 18px; color: #999999; border-top: 0px; border-right: 0px\" value=\"\" name=\"q\" type=\"text\" /><input type=\"hidden\" name=\"pagemode\" value=\"result\" /><input type=\"hidden\" name=\"appid\" value=\"1\" /><input type=\"hidden\" name=\"webid\" value=\"40\" /><input type=\"hidden\" name=\"style\" value=\"1\" /><input type=\"hidden\" name=\"ck\" value=\"0\" /><input id=\"pos\" type=\"hidden\" name=\"pos\" value=\"title,content\" /></td>");
        document.writeln("                <td></td>");
        document.writeln("            </tr>");
        document.writeln("        </tbody>");
        document.writeln("    </table>");
        document.writeln("</form>");
        document.writeln("</div>");
        document.writeln("<div style=\"float: left\"><span> <a onclick=\"return hello()\" target=\"_blank\" class=\"top\" style=\"cursor:pointer;text-decoration:underline;font-size:14px;\">搜索</a>  <a target=\"_blank\" class=\"top\" style=\"text-decoration:underline;font-size:14px;\" href=\"http://www.ddd.com/erha.php?/jsearch/search.do?pagemode=advsearch&appid=1&style=1\">网站群搜索</a></span></div>");</script>', $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://www.ceec.net.cn/script/0/1508181952199100.js'></script>", '<script language="javascript">
        function weixin1(id1,id2){
            document.getElementById(id1).src="http://www.ceec.net.cn/picture/0/1404281119336441477.jpg";
            document.getElementById(id2).style.display="block";
        }
        function weixin2(id1,id2){
            document.getElementById(id1).src="http://www.ceec.net.cn/picture/0/1404281119335415334.jpg";
            document.getElementById(id2).style.display="none";
        }
        function apptab1(id1,id2){
            document.getElementById(id1).src="http://www.ceec.net.cn/picture/886/1512281655301165105.png";
            document.getElementById(id2).style.display="block";
        }
        function apptab2(id1,id2){
            document.getElementById(id1).src="http://www.ceec.net.cn/picture/886/1512281655300517624.png";
            document.getElementById(id2).style.display="none";
        }
        document.writeln("<table  border=\"0\" cellspacing=\"0\" cellpadding=\"0\" height=\"59\" align=\"right\">");
        document.writeln("<tr>");

        document.writeln("<td width=\"30\" style=\"position:relative;\" onmouseover=\"apptab1(\'app1\',\'app2\');\" onmouseout=\"apptab2(\'app1\',\'app2\');\" align=\"left\"><img src=\"\http://www.ceec.net.cn/picture\/886\/1512281655300517624.png\" id=\"app1\" width=\"12\" height=\"18\"\/><div style=\"padding:15px; width:200px; height:200px; position:absolute; z-index:10; left:-108px; bottom:-200px; display:none;\" id=\"app2\"><img src=\"\http://www.ceec.net.cn/picture\/886\/1512281643494304570.jpg\" width=\"200\" height=\"200\" \/><\/div><\/td>");

        document.writeln("<td width=\"36\" style=\"position:relative;\" onmouseover=\"weixin1(\'wx1\',\'wx2\');\" onmouseout=\"weixin2(\'wx1\',\'wx2\');\" align=\"left\"><img src=\"\http://www.ceec.net.cn/picture\/0\/1404281119335415334.jpg\" id=\"wx1\" width=\"23\" height=\"18\"\/><div style=\"padding:15px; width:200px; height:200px; position:absolute; z-index:10; left:-108px; bottom:-200px; display:none;\" id=\"wx2\"><img src=\"\http://www.ceec.net.cn/picture\/886\/1510231702460368958.jpg\" width=\"200\" height=\"200\" \/><\/div><\/td>");


        document.writeln("		   <td width=\"30\" align=\"left\"><a target=\"_blank\" href=\"\http://www.ceec.net.cn/col\/col11459\/index.html\"><img border=\"0\" alt=\"RSS璁㈤槄\" width=\"17\" height=\"17\" onmouseout=\"this.src=\'\http://www.ceec.net.cn/picture\/0\/1403012022085906734.gif\'\" onMouseMove=\"this.src=\'\http://www.ceec.net.cn/picture\/0\/1403012022415424964.gif\'\" src=\"\http://www.ceec.net.cn/picture\/0\/1403012022085906734.gif\" \/><\/a><\/td>");
        document.writeln("		   <td width=\"36\" align=\"left\"><a target=\"_blank\" href=\"\http://www.ceec.net.cn/jbook\/front\/emailbook.jsp\"><img border=\"0\" alt=\"閭\" width=\"20\" height=\"16\" onmouseout=\"this.src=\'\http://www.ceec.net.cn/picture\/1\/1402121125373796931.jpg\'\" onMouseOver=\"this.src=\'\http://www.ceec.net.cn/picture\/1\/1403050921010606203.jpg\'\" src=\"\http://www.ceec.net.cn/picture\/1\/1402121125373796931.jpg\" \/><\/a><\/td>");
        document.writeln("<\/tr>");
        document.writeln("<\/table>")</script>', $fcontents);

    return $fcontents;
}

function bbb_replace($url)
{
    $fp = @fopen($url, 'r') or die('timeout'); //判断网页能否打开
    $fcontents = file_get_contents($url);

    $fcontents = str_replace('="/', '="http://en.ceec.net.cn/', $fcontents);
    $fcontents = str_replace("='/", "='http://en.ceec.net.cn/", $fcontents);
    $fcontents = str_replace("=\'/", "=\'http://en.ceec.net.cn/", $fcontents);
    $fcontents = str_replace("='./", "='http://en.ceec.net.cn/", $fcontents);

    //路由跳转
    $fcontents = str_replace('http://en.ceec.net.cn/art', 'http://www.ddd.com/bbb.php?/art', $fcontents);
    $fcontents = str_replace('http://en.ceec.net.cn/col', 'http://www.ddd.com/bbb.php?/col', $fcontents);
    $fcontents = str_replace('http://en.ceec.net.cn/module', 'http://www.ddd.com/bbb.php?/module', $fcontents);
    $fcontents = str_replace('http://en.ceec.net.cn/gtb', 'http://www.ddd.com/bbb.php?/gtb', $fcontents);

    //js路由
    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406051753574693.js'>", '<script language="javascript">
function go2GB() { 
    var url = "ht"+"tp"+"://www."+"ceec"+".net.cn/";
     window.top.location = url; 
    } 
    function go2BIG5() { 
    var url = "/gtb/" +"index."+"jsp?url=ht"+"tp"+"://www."+"ceec" +".net.cn/"; 
    window.top.location = url; 
    }
    document.writeln("<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" height=\"28\" >");
    document.writeln("  <tr>");
    document.writeln("	<td width=\"40\" align=\"center\"><img src=\"http://en.ceec.net.cn/picture/542/1406051751591308201.jpg\" /></td>");
    document.writeln("	<td width=\"77\"><a class=\"top\" href=\"http://www.ddd.com/aaa.php?/col/col11125/index.html\">网站群</a>  <img src=\"/picture/542/1406051751592349438.jpg\" width=\"9\" height=\"5\" /></td>");
    document.writeln("	<td width=\"65\" align=\"center\"><a class=\"top\"  href=\"http://www.ddd.com/aaa.php\">简体版</a></td>");
    document.writeln("	<td width=\"1\" style=\"color:#b3b3b3\">|</td>");
    document.writeln("	<td width=\"65\" align=\"center\"><a class=\"top\"  href=\"http://www.ddd.com/bbb.php?/gtb/index.jsp?url=http://www.ceec.net.cn/\">繁體版</a></td>");
    document.writeln("  </tr>");
    document.writeln("</table>");
    </script>', $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406051742123789.js'>", '<script language="javascript">
    function hello(){
        var q = document.qForm.q.value;
        if(q==" "){
        alert("请输入关键字!");
        return false;
        }else{
        return true;
        }
        }
        document.writeln("<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" height=\"22\">");
        document.writeln("<form method=\"get\" action=\"\/jsearch\/search.do\" target=\"_blank\" name=\"qForm\">");
        document.writeln("	<tr>");
        document.writeln("		<td width=\"176\" style=\"border: #e3e3e3 1px solid; padding-right:7px;\"><input id=\"q\" onclick=\"if(this.value==\'\'){this.value=\'\';this.focus();}\" onblur=\"if(this.value==\'\'){this.value=\'\'}\" style=\" line-height: 18px; width:145px; height: 18px; border:0; margin:0; padding:0; float:left; padding-left:5px;\" name=\"q\" type=\"text\" \/><input type=\"hidden\" name=\"pagemode\" value=\"result\" style=\"float:left\" \/><input type=\"hidden\" name=\"appid\" value=\"1\"  style=\"float:left\"\/><input type=\"hidden\" name=\"webid\" value=\"1\" style=\"float:left\"\/><input type=\"hidden\" name=\"style\" value=\"1\" style=\"float:left\"\/><input type=\"hidden\" name=\"ck\" value=\"0\" style=\"float:left\"\/><input id=\"pos\" type=\"hidden\" name=\"pos\" value=\"title,content\" style=\"float:left\"\/><input src=\"http://en.ceec.net.cn/picture\/542\/1406051741020941818.jpg\" type=\"image\" name=\"imageField\" onclick=\"return hello()\" style=\"float:right; margin-top:3px; width:14px; height:14px;\"\/><\/td>");
        document.writeln("		<td width=\"60\" align=\"center\"><a target=\"_blank\" class=\"top\"   href=\"\http://www.ddd.com/bbb.php?/jsearch\/search.do?pagemode=advsearch&appid=1&style=1\">Search<\/a><\/td>");
        document.writeln("	<\/tr>");
        document.writeln("<\/form>");
        document.writeln("<\/table>")
        </script>', $fcontents);

    $str = '<script language="javascript">
        document.writeln("<style type=\"text/css\">");
        document.writeln(".menubj{ background:url(/picture/542/1406141551548811889.jpg) no-repeat bottom  center;}");
        document.writeln("</style>");
        document.writeln("<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" height=\"40\">");
        document.writeln("<tr>");
        document.writeln("	<td width=\"42\" align=\"center\" class=\"menubj\"><a href=\"http://www.ddd.com/bbb.php\" class=\"white\">Home</a></td>");
        document.writeln("	<td width=\"88\" align=\"center\"><a href=\"http://www.ddd.com/bbb.php?/col/col131/index.html\" class=\"white\">About Us</a></td>");
        document.writeln("    <td width=\"110\" align=\"center\"><a href=\"http://www.ddd.com/bbb.php?/col/col141/index.html\" class=\"white\">Core Business</a></td>");
        document.writeln("	<td width=\"42\" align=\"center\"><a href=\"http://www.ddd.com/bbb.php?/col/col138/index.html\" class=\"white\">News</a></td>");
        document.writeln("	<td width=\"160\" align=\"center\"><a href=\"http://www.ddd.com/bbb.php?/col/col17206/index.html\" class=\"white\">Investor relations</a></td>");
        document.writeln("    <td width=\"40\" align=\"center\"><a href=\"http://www.ddd.com/bbb.php?/col/col6751/index.html\" class=\"white\">CSR</a></td>");
        document.writeln("</tr>");
        document.writeln("</table>");
            </script>';
    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406141557135307.js'>", $str, $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406141557135278.js'>", $str, $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406141557134801.js'>", $str, $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406141557135700.js'>", $str, $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406141557133555.js'>", $str, $fcontents);

    $fcontents = str_replace("<script language='javascript' src='http://en.ceec.net.cn/script/0/1406141557138618.js'>", $str, $fcontents);

    return $fcontents;
}
