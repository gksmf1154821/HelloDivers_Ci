<body >
    <div class="row board-main" >
        <div class="container">
            <div class="title center">
                <h2>Free Dive 게시판</h2>
            </div>
            <div class="col l12 m12 s12">
                <table class="highlight striped centered responsive-table">
                    <colgroup>
                        <col span="1" style="width: 10%;">
                        <col span="1" style="width: 60%;">
                        <col span="1" style="width: 15%;">
                        <col span="1" style="width: 15%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($get_list->result_array() as $row){ ?>
                            <tr>
                                <td><?=$row['idx']?></td>
                                <td><a href="/Board/board_detail/<?=$row['idx']?>"><?=$row['title']?></a></td>
                                <td><?=$row['writer']?></td>
                                <td><?=$row['date']?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col l12 m12 s12 write-btn">
                <a class="btn center" href="/Board/write">글쓰기</a>
            </div>
            <div class="col l12 m12 s12 center">
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>