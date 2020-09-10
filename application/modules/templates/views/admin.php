<html>
<head></head>

<body>
    <table width='900' align="center">
            <tr><td align="center"><h1>admin</h1> </td></tr>
            <tr>
                <td>
                    <p>test</p>
                </td>
                <td>
                    <p>test1</p>
                </td>
            </tr>

            <tr>
                <td align="center" valign="center">
                    tasks
                </td>
                <td>
                    <?php $this->load->view($module.'/'.$view_file); ?>
                </td>    
            </tr>
    </table>
</body>
</html>