
// sweet alert 
const btnDelMitra=document.querySelector('.btn-delete-mitra');
btnDelMitra.addEventListener('click',async()=>{
   const url=btnDelMitra.dataset.url;
   const isAlert=await swal("Apakah anda ingin menghapus data ini?", {
        buttons: ["Tidak", "Iya"],
      });

      if(isAlert){
          location.replace(url);
      }
})