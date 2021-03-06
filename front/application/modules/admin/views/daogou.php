<?php echo $this->load->view('admin/header');?>
<?php echo $this->load->view('admin/sidebar');?>
<script type="text/javascript" src="/resources/js/daogou.js"></script>
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="/redbud_admin">Home</a>
            </li>
            <li class="active">信托导购</li>
        </ul><!-- .breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="icon-search nav-search-icon"></i>
                            </span>
            </form>
        </div><!-- #nav-search -->
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                 <h3 class="smaller lighter blue" style="display: inline;">信托导购列表</h3>
                <button class="btn btn-primary" style="float: right;margin-right: 10px;" onclick="Poc.addpage()">
                    <i class="icon-plus align-top bigger-125"></i>添加
                </button>
                 <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
               <!--  <th class="center">
                    <label>
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th> -->
                <th>信托课程标题</th>
                <th>信托内容</th>
                <th class="hidden-480">发布时间</th>

            
                <th>操作</th>
            </tr>
            </thead>

            <tbody>
            <?php $sum = count( $result); ?>
            <?php for( $i = 0; $i< $sum;$i++){ ?>
            <tr>
                <td class="center">
                    <label>
                        <!-- <input type="checkbox" class="ace" /> -->
                        <span class="lbl"><?php echo $result[$i]['title']; ?></span>
                    </label>
                </td>

                <td>
                    <a href="#"><?php  echo $result[$i]['content'];?></a>
                </td>
                <td><?php  echo $result[$i]['ctime']; ?></td>
           
                <td>
                    <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                        <a class="blue" href="#">
                            <i class="icon-zoom-in bigger-130"></i>
                        </a>

                        <a class="green" href="/redbud_admin/upsertdaogou?cid=<?php echo $result[$i]['id']; ?>">
                            <i class="icon-pencil bigger-130"></i>
                        </a>

                        <a class="red" href="#">
                            <i class="icon-trash bigger-130"></i>
                        </a>
                    </div>

                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                        <div class="inline position-relative">
                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-caret-down icon-only bigger-120"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                <li>
                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                        <span class="blue">
                                            <i class="icon-zoom-in bigger-120"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                        <span class="green">
                                            <i class="icon-edit bigger-120"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                        <span class="red">
                                            <i class="icon-trash bigger-120"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>


                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
<?php echo $this->load->view('admin/footer'); ?>