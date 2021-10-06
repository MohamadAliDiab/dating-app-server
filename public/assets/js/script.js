$(document).ready(show_users);

function show_users(){
    show_usersAPI().then(users => {
        $.each(users , function (i , users){
            $('#users').append("<div className='grid-member filter-item girl' style='position: absolute; left: 0px; top: 0px;'><div className='lab-item member-item style-1 style-2'>\n" +
                "        <div className=\'lab-inner\'>\n" +
                "            <div className=\'lab-content\'>"+ users.first_name + "</div></div></div>");

        })
    })
}

async function show_usersAPI(){
    const response = await fetch("");

    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const users = await response.json();
    return users;
}


// <div className="grid-member filter-item girl" style="position: absolute; left: 0px; top: 0px;">
//     <div className="lab-item member-item style-1 style-2">
//         <div className="lab-inner">
//             <div className="lab-content">
//                 <h6><a href="">Johanna</a></h6>
//                 <button type="button" className="btn btn-success">Add to list of Highlighted</button>
//             </div>
//         </div>
//     </div>
// </div>


