 <!--Pagination-->
 @if (!Route::is(['blog-list', 'blog-grid']))
     <div class="blog-pagination">
 @endif
 @if (Route::is(['blog-list', 'blog-grid']))
     <div class="pagination">
 @endif
 <nav>
     @if (!Route::is(['blog-list', 'blog-grid']))
         <ul class="pagination page-item justify-content-center">
     @endif
     @if (Route::is(['blog-list', 'blog-grid']))
         <ul class="pagination mt-0">
     @endif
     <li class="previtem">
         <a class="page-link" href=""><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
     </li>
     <li class="justify-content-center pagination-center">
         <div class="page-group">
             <ul>
                 <li class="page-item">
                     <a class="page-link" href="">1</a>
                 </li>
                 <li class="page-item">
                     <a class="active page-link" href="">2 <span class="visually-hidden">(current)</span></a>
                 </li>
                 <li class="page-item">
                     <a class="page-link" href="">3</a>
                 </li>
                 <li class="page-item">
                     <a class="page-link" href="">4</a>
                 </li>
                 <li class="page-item">
                     <a class="page-link" href="">5</a>
                 </li>
             </ul>
         </div>
     </li>
     <li class="nextlink">
         <a class="page-link" href="">Next <i class="fas fa-regular fa-arrow-right ms-2"></i></a>
     </li>
     </ul>
 </nav>
 </div>
 <!--/Pagination-->
