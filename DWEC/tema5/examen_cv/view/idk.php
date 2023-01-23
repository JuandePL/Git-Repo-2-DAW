<form action="n.php" method="post" enctype="multipart/form-data">
    <table width="642" height="215" border="10" align="left" cellspacing="0">

        ... your table stuff ...
        <?php
        include __DIR__ . '/templates/header.php';
        include_once __DIR__ . '/../model/DB.php';

        $page_size = 10;

        // Get total pages
        $sql = "SELECT COUNT(*) as cnt FROM users";
        $result = DB::prepare($sql);
        $teacher_count = $result[0]["cnt"]; // I'm unsure how you DB class works;
        $pages = ceil($teachers / $page_size);

        $page = isset($_GET['page']) ? $_GET['page'] : 1; // take from query string or default to 1
        $next = $page + 1 > $pages ? $pages : $page + 1;
        $prev = $page - 1 > 0 ? $page - 1 : 1;

        $sql = "SELECT * FROM teacher LIMIT " . $page_size * ($page - 1) . ", " . $page_size;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $id = $row['tid'];
        ?>
                <tr>
                    <td height="50" align="center" class="style5"><?php echo $row['tid']; ?></td>
                    <td align="center" class="style5"><?php echo $row['tname']; ?></td>
                    <td align="center" class="style5"><?php echo $row['treg']; ?></td>
                    <td align="center" class="style5"><?php echo $row['qualification']; ?></td>
                    <td align="center" class="style5"><?php echo $row['subject']; ?></td>
                    <td align="center"> <input type="text" name="rating[<?php echo $id; ?>]">
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "<center><p><font size=10/> No Records</p></center>";
        }

        $conn->close();
        ?><tr>
            <td colspan="6">
                <input type="submit" name="submit" value="Enter">
            </td>
        </tr>
    </table>
    <?php
    if ($next > 1) {
        echo "<a href='?page=$prev'>prev page</a>";
    }
    if ($prev > 0 && $page !== 1) {
        echo "<a href='?page=$next'>next page</a>";
    }
    ?>
</form>