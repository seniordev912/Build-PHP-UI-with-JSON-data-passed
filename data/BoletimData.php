<?php
function connect() {

    $data = '
    {
        "ids": [
          {
            "id": "1234",
            "header": {
              "fields": [
                {
                  "Label": "Nome :",
                  "Value": "here goes kid name"
                },
                {
                  "Label": "Turma :",
                  "Value": "1 Ano A"
                }
              ]
            },
            "blocks": [
              {
                "Header text": "1 Bimestre",
                "barposition": "left",
                "_comment_barposition": "could be left, right or none",
                "barcolor": "red",
                "Columns": [
                  {
                    "Title": "Matéria",
                    "Width": "100 %"
                  },
                  {
                    "Title": "Nota",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Falta",
                    "Width": "100 px"
                  }
                ],
                "Lines": [
                  {
                    "Columns": [
                      {
                        "Value": "Matemática"
                      },
                      {
                        "Value": "3,0",
                        "color": "red"
                      },
                      {
                        "Value": "4"
                      }
                    ]
                  },
                  {
                    "Columns": [
                      {
                        "Value": "Português"
                      },
                      {
                        "Value": "6,0",
                        "color": "blue"
                      },
                      {
                        "Value": "3"
                      }
                    ]
                  }
                ],
                "Trailer": {
                  "htmlcontent": "some optional value"
                }
              },
              {
                "Header text": "2 Bimestre",
                "barposition": "left",
                "barcolor": "blue",
                "Columns": [
                  {
                    "Title": "Matéria",
                    "Width": "100 %"
                  },
                  {
                    "Title": "Nota",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Falta",
                    "Width": "100 px"
                  }
                ],
                "Lines": [
                  {
                    "Columns": [
                      {
                        "Value": "Matemática",
                        "color": "blue"
                      },
                      {
                        "Value": "9,5",
                        "color": "blue"
                      },
                      {
                        "Value": "1",
                        "color": "red"
                      }
                    ]
                  },
                  {
                    "Columns": [
                      {
                        "Value": "Português"
                      },
                      {
                        "Value": "6,0",
                        "color": "blue"
                      },
                      {
                        "Value": "3"
                      }
                    ]
                  }
                ],
                "Trailer": {
                  "htmlcontent": "the trailer can be omited"
                }
              },
              {
                "Header text": "Finais",
                "barposition": "left",
                "barcolor": "blue",
                "Columns": [
                  {
                    "Title": "Matéria",
                    "Width": "100 %"
                  },
                  {
                    "Title": "Nota",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Falta",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Freq",
                    "Width": "100 px"
                  }
                ],
                "Lines": [
                  {
                    "Columns": [
                      {
                        "Value": "Matemática"
                      },
                      {
                        "Value": "8,7",
                        "color": "blue"
                      },
                      {
                        "Value": "5"
                      },
                      {
                        "Value": "90 %"
                      }
                    ]
                  },
                  {
                    "Columns": [
                      {
                        "Value": "Português"
                      },
                      {
                        "Value": "6,0",
                        "color": "blue"
                      },
                      {
                        "Value": "6"
                      },
                      {
                        "Value": "87 %"
                      }
                    ]
                  }
                ]
              }
            ],
            "trailer": {
              "htmlcontent": "<b> just a sample </b>"
            }
          },
          {
            "id": "4321",
            "header": {
              "fields": [
                {
                  "Label": "Nome :",
                  "Value": "Second kid name"
                },
                {
                  "Label": "Turma :",
                  "Value": "2 Ano A"
                }
              ]
            },
            "blocks": [
              {
                "Header text": "1 Bimestre",
                "barposition": "left",
                "_comment_barposition": "could be left, right or none",
                "barcolor": "red",
                "Columns": [
                  {
                    "Title": "Matéria",
                    "Width": "100 %"
                  },
                  {
                    "Title": "Nota",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Falta",
                    "Width": "100 px"
                  }
                ],
                "Lines": [
                  {
                    "Columns": [
                      {
                        "val": "Matemática"
                      },
                      {
                        "val": "3,0",
                        "color": "red"
                      },
                      {
                        "val": "4"
                      }
                    ]
                  },
                  {
                    "Columns": [
                      {
                        "val": "Português"
                      },
                      {
                        "val": "6,0",
                        "color": "blue"
                      },
                      {
                        "val": "3"
                      }
                    ]
                  }
                ],
                "Trailer": {
                  "htmlcontent": "some optional value"
                }
              },
              {
                "Header text": "2 Bimestre",
                "barposition": "left",
                "barcolor": "blue",
                "Columns": [
                  {
                    "Title": "Matéria",
                    "Width": "100 %"
                  },
                  {
                    "Title": "Nota",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Falta",
                    "Width": "100 px"
                  }
                ],
                "Lines": [
                  {
                    "Columns": [
                      {
                        "Value": "Matemática",
                        "color": "blue"
                      },
                      {
                        "Value": "9,5",
                        "color": "blue"
                      },
                      {
                        "Value": "1",
                        "color": "red"
                      }
                    ]
                  },
                  {
                    "Columns": [
                      {
                        "Value": "Português"
                      },
                      {
                        "Value": "6,0",
                        "color": "blue"
                      },
                      {
                        "Value": "3"
                      }
                    ]
                  }
                ],
                "Trailer": {
                  "htmlcontent": "the trailer can be omited"
                }
              },
              {
                "Header text": "Finais",
                "barposition": "left",
                "barcolor": "blue",
                "Columns": [
                  {
                    "Title": "Matéria",
                    "Width": "100 %"
                  },
                  {
                    "Title": "Nota",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Falta",
                    "Width": "100 px"
                  },
                  {
                    "Title": "Freq",
                    "Width": "100 px"
                  }
                ],
                "Lines": [
                  {
                    "Columns": [
                      {
                        "Value": "Matemática"
                      },
                      {
                        "Value": "8,7",
                        "color": "blue"
                      },
                      {
                        "Value": "5"
                      },
                      {
                        "Value": "90 %"
                      }
                    ]
                  },
                  {
                    "Columns": [
                      {
                        "Value": "Português"
                      },
                      {
                        "Value": "6,0",
                        "color": "blue"
                      },
                      {
                        "Value": "6"
                      },
                      {
                        "Value": "87 %"
                      }
                    ]
                  }
                ]
              }
            ],
            "trailer": {
              "htmlcontent": "<b> just a sample </b>"
            }
          }
        ]
      }
    ';

    $res = json_decode($data, true);

    return $res;
}
?>