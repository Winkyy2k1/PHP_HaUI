

<form action="insert_table.php" method="POST">
    <table width= "500px "border="1" style="border-collapse: collapse; " > 
     
       <tr> 
           <td > <label> Tên: </label> </td>
           <td > <input type="text" id="nameUser" name="nameUser" > </td>
        </tr>
        <tr> 
            <td> <label> Mật khẩu:  </label> </td>
            <td> <input type="password" id="passUser" name="passUser" > </td>
        </tr>
        <tr> 
            <td> <label> Giới tính: </label> </td>
            <td> <input type="text" id="gtUser" name="gtUser" > </td>
        </tr>
        <tr> 
            <td> <label> Ngành học: </label> </td>
            <td> <input type="text" id="nganhHocUser" name="nganhHocUser" > </td>
        </tr>
        <tr>
            <td colspan="2" style=" text-align: center;"> 
                <button type="sumbit"> Thêm  </button>   
                <a href="display.php"> <button type="button">  Huỷ </button> 
            </td>
        </tr>
     
    </table>
    </form>


