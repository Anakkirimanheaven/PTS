<form method = "POST" action ="hasilnya.php">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type='text' name ='nama'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jk">
                            <option value="">.....</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td> 
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name ='tgl'></td>
                </tr>
                <tr>
                    <td>Kategori Olahraga</td>
                    <td>:</td>
                    <td>
                    <input type="radio" name='olah' value="Sepak Bola" >Sepak Bola <br>
                    <input type="radio" name='olah' value="Bulu Tangkis" >Bulu Tangkis <br>
                    <input type="radio" name='olah' value="Renang" >Renang <br>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                    <input type="checkbox" name="kelas" value="pemula"> Pemula <br>
                    <input type="checkbox" name="kelas" value="menengah"> Menengah <br>
                    <input type="checkbox" name="kelas" value="lanjutan"> Lanjutan <br>
                    </td>
                </tr>
                <tr>
                    <td>Kemampuan Fisik</td>
                    <td>:</td>
                    <td><textarea name="kf"></textarea></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                        <select name="pem">
                            <option value="">.....</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="Kartu Kredit">Kartu Kredit</option>
                        </select>
                    </td> 
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" values='GOOOOOOOOOO'></td>
                </tr>
            </tr>
             </table>
</form>