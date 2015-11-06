DROP TABLE IF EXISTS quote;

CREATE TABLE quote (
	quoteId          INT UNSIGNED AUTO_INCREMENT NOT NULL,
	quoteContent     VARCHAR(2048)               NOT NULL,
	quoteAttribution VARCHAR(256)                NOT NULL,
	quoteDate        DATETIME                    NOT NULL,
	PRIMARY KEY (quoteId)
);