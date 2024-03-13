$(document).on('input', '#search-bar', function (e) {

    var search = $('input[name="search"]').val();
    var categoryId =  $('#categories').val();
    console.log(categoryId)
    $.ajax({
        url: '/search',
        type: 'GET',
        data: {
            search: search,
            categoryId: categoryId
        },

        success: function (response) {
            console.log(response.events)
            displayProducts(response.events);
        }

    });
});

function displayProducts(events) {
    let articleContainer = document.getElementById("event_container");
    articleContainer.innerHTML = "";
    events.forEach(event => {
        articleContainer.innerHTML += `
                <div
                    class="bg-gray-500 mb-6  cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                    <a href="/event/${event.id}/show">
                    <img src="/storage/images/${event.image}" alt="${event.title}" class="w-full h-96 object-cover" />

                    </a>

                    <div class="p-6 absolute bottom-0 left-0 right-0 bg-white opacity-90">
                    <span class="text-sm block text-gray-600 mb-2">${event.date} | BY ${event.organizer.user.firstname} ${event.organizer.user.lastname}</span>

                    <h3 class="text-xl font-bold text-[#333]">${event.title}</h3>
                    <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                    <p class="text-gray-600 text-sm">${event.description}</p>
                            </div>
                    </div>
                </div>
        `});
}



