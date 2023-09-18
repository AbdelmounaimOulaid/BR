const expirationYear = document.getElementById('year');
const expirationMonth = document.getElementById('month');
const cardCVC = document.getElementById('cvc');

let allVisible = true;

let visa = document.getElementById("visa");
let mastercard = document.getElementById("mastercard");
let discover = document.getElementById("discover");
let amex = document.getElementById("amex");


let cards = {
    visa: visa,
    mastercard: mastercard,
    discover: discover,
    amex: amex,
};

let oldMonth = 1;
expirationMonth.addEventListener('input', e => {
    let value = e.target.value

    if (value.length >= 2) {
        expirationYear.focus()
    }

    if (parseInt(value) <= 0 || parseInt(value) >= 13) {
        e.target.value = oldMonth;
        return false;
    }

    oldMonth = value;
})

let oldYear = 23;
expirationYear.addEventListener('input', e => {
    let value = e.target.value

    if (value.length >= 2) {
        cardCVC.focus()
    }

    if (parseInt(value) <= 0 || parseInt(value) >= 99) {
        e.target.value = oldYear;
        return false;
    }

    oldYear = value;
})

oldCVC = 0;
cardCVC.addEventListener('input', e => {
    let value = e.target.value

    if (value.length <= 3) {
        oldCVC = value
    } else {
        e.target.value = oldCVC
    }
})

const cardsAnimation = (cardName) => {
    if (Object.keys(cards).includes(cardName)) {
        toggleAnimation("slide-out");
        for (let c in cards) {
            setTimeout(() => {
                cards[c].style.display = "none";
            }, 500);
        }

        setTimeout(() => {
            cards[cardName].style.display = "block";
            showIcon(cards[cardName]);
        }, 510);

        allVisible = false;
    } else {
        if (!allVisible) {
            for (let c in cards) {
                cards[c].style.display = "block";
            }

            toggleAnimation("slide");

            allVisible = true;
        }
    }
};

const showIcon = (el) => {
    el.classList.remove("slide-out", "slide");
    setTimeout(() => {
        el.classList.add("slide");
    }, 0);
};

const toggleAnimation = (name, except) => {
    for (let c in cards) {
        cards[c].classList.remove("slide-out", "slide");
        if (name == "slide") {
            cards[c].style.display = "none";
        }
    }
    
    setTimeout(() => {
        for (let c in cards) {
            if (c !== except) {
                cards[c].style.display = "block";
                cards[c].classList.add(name);
            }
        }
    }, 0);
};



// function getCardType(cardNumber) {
//     // Define regular expressions for each card type
//     const visaRegEx = /^4[0-9]{12}(?:[0-9]{3})?$/;
//     const mastercardRegEx = /^5[1-5][0-9]{14}$/;
//     const amexRegEx = /^3[47][0-9]{13}$/;
//     const discoverRegEx = /^6(?:011|5[0-9]{2})[0-9]{12}$/;

//     // Check the card number against each regular expression to find a match
//     if (visaRegEx.test(cardNumber)) {
//       return "visa";
//     } else if (mastercardRegEx.test(cardNumber)) {
//       return "mastercard";
//     } else if (amexRegEx.test(cardNumber)) {
//       return "amex";
//     } else if (discoverRegEx.test(cardNumber)) {
//       return "discover";
//     } else {
//       return "none";
//     }
//   }

// const validCreditcard = (cardnumb) => {
//     const ccErrors = [];
//     ccErrors[0] = "Unknown card type";
//     ccErrors[1] = "No card number provided";
//     ccErrors[2] = "Credit card number is in invalid format";
//     ccErrors[3] = "Credit card number is invalid";
//     ccErrors[4] = "Credit card number has an inappropriate number of digits";
//     ccErrors[5] =
//         "Warning! This credit card number is associated with a scam attempt";

//     const response = (success, message = null, type = null) => ({
//         message,
//         success,
//         type,
//     });

//     const validCardnumb = (numb) => {
//         const regex = new RegExp("^[0-9]{13,19}$");
//         if (!regex.test(numb)) {
//             return false;
//         }
//         return luhnCheck(numb);
//     };

//     const luhnCheck = (val) => {
//         let validsum = 0;
//         let k = 1;
//         for (let l = val.length - 1; l >= 0; l--) {
//             let calck = 0;
//             calck = Number(val.charAt(l)) * k;
//             if (calck > 9) {
//                 validsum = validsum + 1;
//                 calck = calck - 10;
//             }
//             validsum = validsum + calck;
//             if (k == 1) {
//                 k = 2;
//             } else {
//                 k = 1;
//             }
//         }
//         return validsum % 10 == 0;
//     };

//     const cards = [];
//     cards[0] = {
//         name: "Visa",
//         length: "13,16",
//         prefixes: "4",
//         checkdigit: true,
//     };
//     cards[1] = {
//         name: "MasterCard",
//         length: "16",
//         prefixes: "51,52,53,54,55",
//         checkdigit: true,
//     };
//     cards[2] = {
//         name: "DinersClub",
//         length: "14,16",
//         prefixes: "36,38,54,55",
//         checkdigit: true,
//     };
//     cards[3] = {
//         name: "CarteBlanche",
//         length: "14",
//         prefixes: "300,301,302,303,304,305",
//         checkdigit: true,
//     };
//     cards[4] = {
//         name: "AmEx",
//         length: "15",
//         prefixes: "34,37",
//         checkdigit: true,
//     };
//     cards[5] = {
//         name: "Discover",
//         length: "16",
//         prefixes: "6011,622,64,65",
//         checkdigit: true,
//     };
//     cards[6] = {
//         name: "JCB",
//         length: "16",
//         prefixes: "35",
//         checkdigit: true,
//     };
//     cards[7] = {
//         name: "enRoute",
//         length: "15",
//         prefixes: "2014,2149",
//         checkdigit: true,
//     };
//     cards[8] = {
//         name: "Solo",
//         length: "16,18,19",
//         prefixes: "6334,6767",
//         checkdigit: true,
//     };
//     cards[9] = {
//         name: "Switch",
//         length: "16,18,19",
//         prefixes: "4903,4905,4911,4936,564182,633110,6333,6759",
//         checkdigit: true,
//     };
//     cards[10] = {
//         name: "Maestro",
//         length: "12,13,14,15,16,18,19",
//         prefixes: "5018,5020,5038,6304,6759,6761,6762,6763",
//         checkdigit: true,
//     };
//     cards[11] = {
//         name: "VisaElectron",
//         length: "16",
//         prefixes: "4026,417500,4508,4844,4913,4917",
//         checkdigit: true,
//     };
//     cards[12] = {
//         name: "LaserCard",
//         length: "16,17,18,19",
//         prefixes: "6304,6706,6771,6709",
//         checkdigit: true,
//     };

//     if (cardnumb.length == 0) {
//         return response(false, ccErrors[1]);
//     }

//     cardnumb = cardnumb.replace(/\s/g, "");

//     if (!validCardnumb(cardnumb)) {
//         return response(false, ccErrors[2]);
//     }

//     if (cardnumb == "5490997771092064") {
//         return response(false, ccErrors[5]);
//     }

//     let lengthValid = false;
//     let prefixValid = false;
//     let cardCompany = "";

//     for (let l = 0; l < cards.length; l++) {
//         const prefix = cards[l].prefixes.split(",");
//         for (let k = 0; k < prefix.length; k++) {
//             const exp = new RegExp("^" + prefix[k]);
//             if (exp.test(cardnumb)) {
//                 prefixValid = true;
//             }
//         }

//         if (prefixValid) {
//             const lengths = cards[l].length.split(",");
//             for (let k = 0; k < lengths.length; k++) {
//                 if (cardnumb.length == lengths[k]) {
//                     lengthValid = true;
//                 }
//             }
//         }

//         if (lengthValid && prefixValid) {
//             cardCompany = cards[l].name;
//             return response(true, null, cardCompany);
//         }
//     }

//     if (!prefixValid) {
//         return response(false, ccErrors[3]);
//     }

//     if (!lengthValid) {
//         return response(false, ccErrors[4]);
//     }

//     return response(true, null, cardCompany);
// };
