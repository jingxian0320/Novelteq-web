<%
dim lan
lan=Request.ServerVariables("HTTP_ACCEPT_LANGUAGE")

if InStr(lan,"zh")>0 then
response.redirect("/cn/index.html")
else
response.redirect("/en/index.html")
end if
%>
