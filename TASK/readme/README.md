Dev Challenge :

Questo script permette la creazione di un report che stampa le transazioni per ogni cliente, tramite il passaggio dell'id corrispondente.

## Creazione del database

- Come primo step, ho riportato  il csv come array multidimensionale nella cartella "server" , per simulare che i dati provenissero da un database.

## Creazione della classe customer

- Ho istanziato la classe Customer, a cui come proprietà assegno l'array contenente il Database.

- Successivamente imposto la funzione getTransactions, che prende in ingresso un valore (nel nostro caso un id), faccio i controlli che quest ultimo sia inserito e che sia un numero intero, dopodichè pusho dentro un altro array settato vuoto inizialmente,  tutti i valori che corrispondono all'id selezionato, e ritorno questo array contenente solo i dati che ci interessano.

## CurrencyWebservice

- Ho usato questa classe per simulare un mini server che ritorna il cambio valuta in euro.

- Con la funzione getExchangeRate che prende in ingresso una valuta, ritorna il corrispettivo tasso di cambio.

## Converter

- In questa classe ho impostato una dipendenza dalla precedente, infatti si serve della CurrencyWebservice per poter convertire i valori in ingresso.

- La funzione convert , che appunto prende in ingresso una stringa contenente l'importo, viene formattata, il simbolo della valuta viene estrapolato e mandato all'API , che ritorna il tasso corrispondente. Infine viene fatto il calcolo tra il tasso di cambio e l'ammontare del prezzo iniziale, e viene ritornato il risultato di questo calcolo, cosi abbiamo la nostra conversione in euro.

## Report

- Infine, avendo tutte le classi ed i metodi a disposizione, ho riportato in pagina i dettaggli riguardo le transazioni dei clienti, tramite la funzione della classe Customer che riporta i dettaggli dell'id passatogli.

- Dai valori ritornati dal customer, uso il metodo convert del CurrencyConverter, per convertire in euro il prezzo iniziale.

- Come ingresso della funzione getTransactions passo un numero random da 1 a 3 , in modo da poter vedere, dopo qualche refresh di pagina, tutti i casi possibili, e quindi il caso dell'id 1 , caso id 2 , e nel caso in cui un id non esistesse.


### Danilo Maida -
