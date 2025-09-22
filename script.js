let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>
{
    searchForm.classList.toggle('active');
    shoppingcart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}



let shoppingcart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>
{
  shoppingcart.classList.toggle('active');
  searchForm.classList.remove('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');
}



  


let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>
{
    loginForm.classList.toggle('active');
    shoppingcart.classList.remove('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    
}
 


let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () =>
{
  navbar.classList.toggle('active');
  loginForm.classList.remove('active');
  shoppingcart.classList.remove('active');
  searchForm.classList.remove('active');
}



window.onscroll = () =>
{
  searchForm.classList.remove('active');
  shoppingcart.classList.remove('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');

}


//feedback component call when we click on feedback section
let feedbackEvent = document.querySelector('.feedback');

document.querySelector('#feedback').onclick = () =>
{
    feedbackEvent.classList.toggle('active');
}






var swiper = new Swiper(".product-slider", {
  loop:true,
  spaceBetween: 20,
  autoplay:{
    delay:7500,
    disableOnInteraction:false,
  }, 
 
 breakpoints: {
    0: {
      slidesPerView: 1,
      
    },
    768: {
      slidesPerView: 2,
    
    },
    1020: {
      slidesPerView: 3,
     
    },
  },
});

  var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay:{
      delay:7500,
      disableOnInteraction:false,
    }, 

    breakpoints: {
      0: {
        slidesPerView: 1,       
      },
      768: {
        slidesPerView: 2,  
      },
      1024: {
        slidesPerView: 3,  
      },
    },
  });


  


  const product=[
    {
      id: 0,
      image: 'images/product 1.jpg',
      title: Cashew,
      price:'Rs.819/-'
    },
    {
      id: 1,
      image: 'images/product 2.jpg',
      title: Walnut,
      price:'Rs.640/-'
       
    },
    {
      id:2,
      image: 'images/product 3.jpg',
      title: Saffron,
      price:'Rs.340/-' 
    },
    {
      id:3,
      image: 'images/product 26.jpg',
      title: Dry_Figs,
      price:'Rs.160/-'     
    }
  ]
  const categories = [...new setInterval(product.map((item)=>{return item}))]

  document.getElementById('searchBar').addEventListener('keyup',(e)=>{
    const searchDate = e.target.value.toLowerCase();
    const filterDate = categories.filter((item)=>{
      return(
        item.title.toLocaleLowerCase().includes(searchDate)
      )
    })
    displayItem(filterDate)
  });


  document.addEventListener('DOMContentLoaded', function () {
    var addToCartButtons = document.querySelectorAll('.addToCartBtn');
    var cartCountElement = document.getElementById('cart-count');
    var cartCount = 0;

    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var productId = this.getAttribute('data-product-id');
            updateCart(productId);
        });
    });

    function updateCart(productId) {
        // Assume you have a cart object or storage to keep track of added products
        // Here, you can update your cart logic

        // For example, increment the cart count
        cartCount++;
        
        // Update the cart count in the UI
        cartCountElement.innerText = cartCount;

        // You may also update other cart details as needed
        // ...
    }
});



  