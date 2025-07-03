<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="page-header">
   <h1 class="page-title">
      <i class="fas fa-list"></i> <?=isset($title) ? $title : ''?>
   </h1>
   <?=isset($sub_title) ? '<p class="page-subtitle">'.$sub_title.'</p>' : ''?>
</div>

<div class="modern-card">
   <div class="modern-card-header">
      <div class="d-flex justify-content-between align-items-center">
         <h3 class="modern-card-title mb-0">Data <?=isset($title) ? $title : ''?></h3>
         <div class="d-flex gap-2">
            <div class="input-group" style="width: 300px;">
               <input type="text" class="form-control-modern keyword" placeholder="Tekan enter untuk pencarian, escape untuk clear">
               <div class="grid-button"></div>
            </div>
         </div>
      </div>
   </div>
   <div class="modern-card-body p-0">
      <div class="modern-table">
         <div class="table-responsive data-table-renderer">
            <table class="table table-hover mb-0">
               <thead class="thead"></thead>
               <tbody class="tbody"></tbody>
            </table>
         </div>
      </div>
   </div>
   <div class="modern-card-body border-top">
      <div class="d-flex justify-content-between align-items-center">
         <div class="d-flex align-items-center gap-3">
            <em class="page-info text-muted"></em>
            <em class="search-info text-muted"></em>
         </div>
         <div class="d-flex align-items-center gap-2">
            <div class="btn-group">
               <button type="button" class="btn-modern btn-outline first" title="First">
                  <i class="fas fa-angle-double-left"></i>
               </button>
               <button type="button" class="btn-modern btn-outline previous" title="Prev">
                  <i class="fas fa-angle-left"></i>
               </button>
               <button type="button" class="btn-modern btn-outline next" title="Next">
                  <i class="fas fa-angle-right"></i>
               </button>
               <button type="button" class="btn-modern btn-outline last" title="Last">
                  <i class="fas fa-angle-double-right"></i>
               </button>
            </div>
            <select class="form-control-modern per-page" style="width: auto; padding: 8px 12px;"></select>
         </div>
      </div>
   </div>
</div>

<!-- Modern Modal Form -->
<div class="modal fade modal-form" tabindex="-1">
   <div class="modal-dialog modal-lg">
      <form class="form-dialog" role="form" method="post">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">
                  <i class="fas fa-edit"></i> <?=$title;?>
               </h5>
               <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
               <div class="form-fields"></div>
            </div>
            <div class="modal-footer">
               <div class="d-flex gap-2">
                  <button class="btn-modern btn-primary submit">
                     <i class="fas fa-save"></i> SIMPAN
                  </button>
                  <button type="reset" class="btn-modern btn-outline reset">
                     <i class="fas fa-redo"></i> RESET
                  </button>
                  <button class="btn-modern btn-outline" data-bs-dismiss="modal">
                     <i class="fas fa-times"></i> BATAL
                  </button>
               </div>
           </div>
         </div>
      </form>
   </div>
</div>

<!-- Modern Preview Modal -->
<div class="modal fade modal-preview" tabindex="-1">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">
               <i class="fas fa-eye"></i> <?=$title;?>
            </h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
         </div>
         <div class="modal-body"></div>
      </div>
   </div>
</div>
