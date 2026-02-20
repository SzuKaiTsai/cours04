// const Scrollbar = window.Scrollbar;
// $(document).ready(() => {
//     Scrollbar.init(document.querySelector('#category-filters'), { alwaysShowTracks:true});

//     $(".product-view").click(async (event) => {
//         event.preventDefault();

//         const href = event.target.href;
//         const response = await axios.get(href);

//         if(response.status === 200) {
//             $("#product-modal-content").html(response.data);
//             const productViewModal = new bootstrap.Modal(document.getElementById('product-view'), {});
//         }
//     });

// })



    let cartes = document.querySelectorAll(".product-view")


    cartes.forEach((carte)=>{
        carte.addEventListener("click",(e)=>{
            e.preventDefault()
            const href = e.target.href

            // retrieve the modal
            let modale = document.querySelector("#product-modal-content")

            // backend call
            axios.get(href)
                .then(response =>{
                    modale.innerHTML = response.data
                })
                .catch(error=>{
                    console.log(error)
                })

        })
    })



function handleCategoryClick(checkbox) {

    if(checkbox.id !== "") {
        window.location.href = `/?categories=${checkbox.id}`;
    } else {
        window.location.href = "/";
    }

}
