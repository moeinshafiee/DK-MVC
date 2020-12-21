<style>
    .content-box {
        background-color: #fff;
        border-radius: 8px;
        border: 1px solid #ededed;
        padding: 16px 0;
    }
    .m-content-header {
        padding: 0 15px 16px 15px;
        position: relative;

    }
    .m-content-title {
        display: inline-block;
        font-size: 16px;
        line-height: 40px;
        font-weight: 500;

    }
    .m-content-body{
        min-height: 500px;
        border-top: 1px solid #f2f2f2;
    }
</style>
<div class="m-container">
    <div class="m-row">
        <?php require 'sidebar-menu.php';
        $categories = $data[0];
        
        ?>
        <div class="m-content">
            <div class="content-box">
                <div class="m-content-header">
                    <span class="m-content-title">دسته‌بندی</span>
                </div>
                <div class="m-content-body"></div>
            </div>
        </div>
    </div>
</div>