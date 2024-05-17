var meth1=["Step1:Take Farm soil, Vinegar, Baking Soda, Bowl, distilled Water.\n\n IF done then say 'yes' , if not then 'repeat'","Step2:Now Place 2 tablespoons of soil in a bowl and add ½ cup vinegar. If the mixture fizzes, you have alkaline soil.\n\n IF done then say 'yes' , if not then say 'repeat'"," Step3: Place 2 tablespoons of soil in a bowl and moisten it with distilled water. Add ½ cup baking soda. If the mixture fizzes, you have acidic soil.\n\n IF done then for getting conclusion say 'yes', if not then say 'repeat'"];
var meth2=["Step 1: Take a shovel and dig up about 1 cubic foot of soil.\n\n IF done then say 'yes'","Step 2: Put the soil on a piece of cardboard, break it apart, and look for earthworms.\n\n IF done then for getting conclusion say 'yes'","1. If your soil is healthy, you will find at least 10 earthworms.\n\n2. If your soil has fewer than 10 worms, add more organic matter—compost, aged manure, leaf mold. Organic matter improves structure, slowly releases nutrients, and increases beneficial microbial activity."];
// var p;
var meth3=["Step 1: Take a transparent container atleast 5 inch tall.\n\n IF done then say 'yes' , if not then 'repeat'","Step 2: Take a mesh with medium size hole in it.\n\n IF done then say 'yes' , if not then 'repeat'","Step 3: Take a piece of soil about a size of a golf ball and dry it till 48 hours.\n\n IF done then say 'yes' , if not then 'repeat'","Step 4: Fill the container with water, put the mesh in it at the top of container.\n\n IF done then say 'yes' , if not then 'repeat'","Step 5: Put the piece of soil on mesh and sink them into water.\n\n IF done then for getting conclusion say 'yes', if not then say 'repeat'","1. If soil crumbles in less than 1 minute then that soil have poor stability.\n\n2. If soil crumbles in between 2 to 5 minutes then that soil have good stability.\n\n3. If soil does not crumbles totally in 5 minutes and have some part on mesh then that soil have exllent stability."];


// let p=inp();

var product;
var k;
// function msw()
// {
  var d=0;
  document.addEventListener("DOMContentLoaded", () => {
    const inputField = document.getElementById("input");
    inputField.addEventListener("keydown", (e) => {
      if (e.code === "Enter")
       {
         let input = inputField.value;
          inputField.value = "";

          if(input=='A' || k=='A')
          {
            if(input=="yes")
            {
             output(input,meth1[d]);
             d++;
            }
            else if(input=="repeat")
            {
             output(input,meth1[d-1]);
            }
            else
            {
              output(input,meth1[0]);
              d++;
              k=input;
            }
           
          }
          else if(input=='B' || k=='B')
          {
            if(input=="yes")
            {
             output(input,meth2[d]);
             d++;
            }
            else if(input=="repeat")
            {
             output(input,meth2[d-1]);
            }
            else
            {
              output(input,meth2[0]);
              d++;
              k=input;
            }
           
          }
          else if(input=='C' || k=='C')
          {
            if(input=="yes")
            {
             output(input,meth3[d]);
             d++;
            }
            else if(input=="repeat")
            {
             output(input,meth3[d-1]);
            }
            else
            {
              output(input,meth3[0]);
              d++;
              k=input;
            }
           
          }
        

        // else
        //   output(input,meth1[1]);
        //     // p=input;

      }
    });
  });
  // return input;
// }



// var p = msw();

function output(p,q) {
   // product=q;

  // Regex remove non word/space chars
  // Trim trailing whitespce
  // Remove digits - not sure if this is best
  // But solves problem of entering something like 'hi1'

  let text = p.toLowerCase().replace(/[^\w\s]/gi, "").replace(/[\d]/gi, "").trim();
  text = text
    .replace(/ a /g, " ")   // 'tell me a story' -> 'tell me story'
    .replace(/i feel /g, "")
    .replace(/whats/g, "what is")
    .replace(/please /g, "")
    .replace(/ please/g, "")
    .replace(/r u/g, "are you");

  // if (compare(prompts, replies, text)) { 
  //   // Search for exact match in `prompts`
  //   product = compare(prompts, replies, text);
  // } else if (text.match(/thank/gi)) {
  //   product = "You're welcome!"
  // } else if (text.match(/(corona|covid|virus)/gi)) {
  //   // If no match, check if message contains `coronavirus`
  //   product = coronavirus[Math.floor(Math.random() * coronavirus.length)];
  // } else {
  //   // If all else fails: random alternative
  //   product = alternative[Math.floor(Math.random() * alternative.length)];
  // }
  // if(input=='A')
  // {
  //   var k=input;
  //   for(var i=0;i<meth1.length;i++)
  //   {
  //     product=meth1[i];
     
      
  //       addChat(k, product);
      
      

                   


  //   }
  // }
  addChat(p,q);
  // else{
  //   product="hello";
  // }

  // Update DOM
  
}

// function compare(promptsArray, repliesArray, string) {
//   let reply;
//   let replyFound = false;
//   for (let x = 0; x < promptsArray.length; x++) {
//     for (let y = 0; y < promptsArray[x].length; y++) {
//       if (promptsArray[x][y] === string) {
//         let replies = repliesArray[x];
//         reply = replies[Math.floor(Math.random() * replies.length)];
//         replyFound = true;
//         // Stop inner loop when input value matches prompts
//         break;
//       }
//     }
//     if (replyFound) {
//       // Stop outer loop when reply is found instead of interating through the entire array
//       break;
//     }
//   }
//   return reply;
// }
  


function addChat(input, product) {
  const messagesContainer = document.getElementById("messages");

  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.className = "user response";
  userDiv.innerHTML = `<img src="user.png" class="avatar"><span>${input}</span>`;
  messagesContainer.appendChild(userDiv);

  let botDiv = document.createElement("div");
  let botImg = document.createElement("img");
  let botText = document.createElement("span");
  botDiv.id = "bot";
  botImg.src = "msw.jfif";
  botImg.className = "avatar";
  botDiv.className = "bot response";
  botText.innerText = "Typing...";
  botDiv.appendChild(botText);
  botDiv.appendChild(botImg);
  messagesContainer.appendChild(botDiv);
  // Keep messages at most recent
  messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;

  // Fake delay to seem "real"
  setTimeout(() => {
    botText.innerText = `${product}`;
    textToSpeech(product)
  }, 2000
  )

}