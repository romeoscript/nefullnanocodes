const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    const enable = document.querySelector('.enable')
    const showCase = document.getElementById('showcase')
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
    showCase.onmouseover = ()=>{
      enable.classList.add('displayed')
    }
    showCase.onmouseleave = ()=>{
      enable.classList.remove('displayed')
    }
   
    const accordionContent = document.querySelectorAll(".accordion-content");

    accordionContent.forEach((item, index) => {
        let header = item.querySelector("header");
        header.addEventListener("click", () => {
            item.classList.toggle("open");

            let description = item.querySelector(".description");
            if (item.classList.contains("open")) {
                description.style.height =
                    `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin
                item.querySelector("i").classList.replace("fa-plus", "fa-minus");
            } else {
                description.style.height = "0px";
                item.querySelector("i").classList.replace("fa-minus", "fa-plus");
            }
            removeOpen(
                index); //calling the funtion and also passing the index number of the clicked header
        })
    })

    function removeOpen(index1) {
        accordionContent.forEach((item2, index2) => {
            if (index1 != index2) {
                item2.classList.remove("open");

                let des = item2.querySelector(".description");
                des.style.height = "0px";
                item2.querySelector("i").classList.replace("fa-minus", "fa-plus");
            }
        })
    }

    
    let showEl = document.querySelectorAll(".gallery__grid_img");
    let information = document.querySelectorAll(".descriptive__info");
    let times2 = document.querySelectorAll('.times2')
    showEl.forEach((element) => {
        element.addEventListener("click", function(e) {
            information.forEach((info) => {
                if (e.target.id == info.id) {
                    info.classList.toggle("file");
                } else {
                    info.classList.remove("file");
                }
            });
        });
       
    });
   
    times2.forEach((time)=>{
        time.addEventListener('click', function(e){
            information.forEach((info) => {
                if (e.target.id == info.id) {
                    info.classList.toggle("file");
                } else {
                    info.classList.remove("file");
                }
            });
            // information.forEach((fim)=>{
            //     fim.classList.toggle('file')
            // })
        })
    })
    console.log(times2)
    // times2.addEventListener('click',()=>{
    //     information.forEach((item)=>{
    //         item.classList.toggle('file')
    //     })
       
    // })
    // times2.addEventListener('click',()=>{
    //     information.style.visibility = 'hidden'
    // })
    // times2.forEach((time)=>{
    //     time.addEventListener('click',()=>{
    //         information.style.visibility = 'hidden'
    //     })
    // })