 <div class="card">
     <div class="card-header with-border">

     </div>
     <div class="card-body">
         <p>
             A huge amount of text
         </p>
     </div>

    {{-- have to bind because otherwise it will consider as string --}}
     <overlay-component v-bind:is-loading="false"></overlay-component>
 </div>
