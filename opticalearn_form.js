$(document).ready(function () {
    const today = new Date();
    const eighteen = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate() + 1);
    const format = eighteen.toISOString().split('T')[0];
    document.getElementById('date').setAttribute('max', format);
    $("#note").mouseenter(function () {
        $("#note1").fadeIn(3000);
    });
});
function testerror()
{
    let isvalid = true;
    const pattern = /^[^\s@]+@[^\s@]+\.[^s@]+$/;
    const name = /^[A-Za-z]+$/;
    $("input").each(function (index, element)
    {
        const val_to_check = $(this).val();
        if (val_to_check === "")
        {
            const mess = "Field Cannot be blank";
            $(this).next().text(mess);
            $(this).next().css("display", "block");
            isvalid = false;
        } else
        {
            $(this).next().css("display", "none");
        }
        if (($(this).attr('id') === "fn") || ($(this).attr('id') === "mn") || ($(this).attr('id') === "ln"))
        {
            if (val_to_check.includes(" "))
            {
                const mess = "Cannot include white spaces";
                $(this).next().text(mess);
                $(this).next().css("display", "block");
                isvalid = false;
            } else if (!(name.test(val_to_check)))
            {
                const mess = "Invalid Input";
                $(this).next().text(mess);
                $(this).next().css("display", "block");
                isvalid = false;
            }
        }
        if ($(this).attr("id") === "email")
        {
            if (!pattern.test(val_to_check))
            {
                const mess = "Invalid Email";
                $(this).next().text(mess);
                $(this).next().css("display", "block");
                isvalid = false;
            }
        }
        if ($(this).attr('id') === "pin" || $(this).attr('id') === "pn")
        {
            if (isNaN(val_to_check))
            {
                const mess = "Numeric Value only";
                $(this).next().text(mess);
                $(this).next().css("display", "block");
                isvalid = false;
            } else if ($(this).attr('id') === "pin")
            {
                if (!(val_to_check.length === 6))
                {
                    const mess = "Please Enter 6 digit pin code";
                    $(this).next().text(mess);
                    $(this).next().css("display", "block");
                    isvalid = false;
                }
            } else if ($(this).attr("id") === "pn")
            {
                if (!(val_to_check.length === 10))
                {
                    const mess = "Please Enter 10 digit Mobile Number";
                    $(this).next().text(mess);
                    $(this).next().css("display", "block");
                    isvalid = false;
                }
            } else
            {
                $(this).next().css("display", "none");
            }
        }
        if ($(this).attr('id') === 'photo')
        {
            const max = this.files[0].size;
            const maxsize = 51200;
            const ext = this.files[0];
            const f_ext = ext.name;
            const filextension = f_ext.split('.').pop().toLowerCase();
            const allowedext = ['jpg', 'jpeg', 'png'];
            if (max > maxsize)
            {
                const mess = "File size should be upto 50 kb";
                $(this).next().text(mess);
                $(this).next().css("display", "block");
                isvalid = false;
            }
            else if (!(this.includes(allowedext)))
            {
                const mess = "Please select a jpg,png or jpeg file";
                $(this).next().text(mess);
                $(this).next().css("display", "block");
                isvalid = false;
            }
            else
            {
                $(this).next().css("display", "none");
            }
        }
    });
    $("select").each(function (index, element)
    {
        const val_to_check = $(this).val();
        if (val_to_check === null)
        {
            const mess = "Please select an option";
            $(this).next().text(mess);
            $(this).next().css("display", "block");
            isvalid = false;
        } else
        {
            $(this).next().css("display", "none");
        }
    });
    if ($('input[name="gen"]:checked').length === 0)
    {
        const mess = "Please select your gender";
        $("#gerror").text(mess);
        $("#gerror").css("display", "block");
        isvalid = false;
    } else
    {
        $("#gerror").css("display", "none");
    }
    return isvalid;
}