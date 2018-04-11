'use strict'
const line = require('./index')

// init with auth token
line.init({
  accessToken: 'uFbH4IE1NOr3gGSvQaRRT4Cd16wjPHBBTTVx9n3ew7Tiv0cGAKUzzMm1GPzwxUPJ0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS6a7z11YyFBkiIr8f2iYTGlmbFXhGXT6QDpKCMt34wo2AdB04t89/1O/w1cDnyilFU=',
  // (Optional) for webhook signature validation
  channelSecret: '63027787afefca74c046df98f144a3df'
})

line.client
  .pushMessage({
    to: 'U3188dcd776da96f3810a238670b29c2b',
    messages:[
        {
            "type":"text",
            "text":"Hello, world1"
        },
        {
            "type":"text",
            "text":"Hello, world2"
        }
    ]
  })
  .then(() => console.log({success: true}))
  .catch(err => console.log(err))
