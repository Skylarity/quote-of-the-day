<?php

require_once(dirname(__DIR__) . "helpers/filter.php");

/**
 * Represents a quote with an ID, content, attribution, and date.
 *
 * @author Skyler Rexroad
 */
class Quote {

	/**
	 * The primary key of the quote
	 * @var int $quoteId
	 */
	private $quoteId;

	/**
	 * The content of the quote.
	 * @var string $quoteContent
	 */
	private $quoteContent;

	/**
	 * Who said the quote.
	 * @var string $quoteAttribution
	 */
	private $quoteAttribution;

	/**
	 * The date the quote was submitted.
	 * @var DateTime $quoteDate
	 */
	private $quoteDate;

	function __construct($quoteId, $quoteContent, $quoteAttribution, $quoteDate) {
		try {
			$this->setQuoteId($quoteId);
			$this->setQuoteContent($quoteContent);
			$this->setQuoteAttribution($quoteAttribution);
			$this->setQuoteDate($quoteDate);
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}
	}

	/**
	 * @return int
	 */
	public function getQuoteId() {
		return $this->quoteId;
	}

	/**
	 * @param $quoteId
	 * @throws Exception
	 */
	public function setQuoteId($quoteId) {
		try {
			$this->quoteId = Filter::filterInt($quoteId, "Quote ID", true);
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}
	}

	/**
	 * @return string
	 */
	public function getQuoteContent() {
		return $this->quoteContent;
	}

	/**
	 * @param $quoteContent
	 * @throws Exception
	 */
	public function setQuoteContent($quoteContent) {
		try {
			$this->quoteContent = Filter::filterString($quoteContent, "Quote content", 2048);
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}
	}

	/**
	 * @return string
	 */
	public function getQuoteAttribution() {
		return $this->quoteAttribution;
	}

	/**
	 * @param $quoteAttribution
	 * @throws Exception
	 */
	public function setQuoteAttribution($quoteAttribution) {
		try {
			$this->quoteAttribution = Filter::filterString($quoteAttribution, "Quote attribution", 256);
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}
	}

	/**
	 * @return DateTime
	 */
	public function getQuoteDate() {
		return $this->quoteDate;
	}

	/**
	 * @param $quoteDate
	 * @throws Exception
	 */
	public function setQuoteDate($quoteDate) {
		try {
			$this->quoteDate = Filter::filterDate($quoteDate, "Quote date", true);
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}
	}

	public function insert(PDO &$pdo) {
		// Make sure this is a new quote
		if($this->getQuoteId() !== null) {
			throw new PDOException("Not a new quote.");
		}

		// Create query template
		$query = "INSERT INTO quote(quoteId, quoteContent, quoteAttribution, quoteDate) VALUES(:quoteId, :quoteContent, :quoteAttribution, :quoteDate)";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the placeholders in the template
		$parameters = array("quoteId" => $this->getQuoteId(), "quoteContent" => $this->getQuoteContent(), "quoteAttribution" => $this->getQuoteAttribution(), "quoteDate" => $this->getQuoteDate());
		$statement->execute($parameters);

		// Update the null quote ID with the ID that MySQL has generated
		$this->setQuoteId(intval($pdo->lastInsertId()));
	}

	public function update(PDO &$pdo) {
		// Make sure the quote exists
		if($this->getQuoteId() === null) {
			throw new PDOException("Cannot update a nonexistent quote");
		}

		// Create query template
		$query = "UPDATE quote SET quoteContent = :quoteContent, quoteAttribution = :quoteAttribution, quoteDate = :quoteDate WHERE quoteId = :quoteId";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the placeholders in the template
		$parameters = array("quoteId" => $this->getQuoteId(), "quoteContent" => $this->getQuoteContent(), "quoteAttribution" => $this->getQuoteAttribution(), "quoteDate" => $this->getQuoteDate());
		$statement->execute($parameters);
	}

	public function delete(PDO &$pdo) {
		// Make sure the quote exists
		if($this->getQuoteId() === null) {
			throw new PDOException("Cannot delete a nonexistent quote");
		}

		// Create query template
		$query = "DELETE FROM quote WHERE quoteId = :quoteId";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the placeholders in the template
		$parameters = array("quoteId" => $this->getQuoteId());
		$statement->execute($parameters);
	}

	public static function getQuoteByQuoteId(PDO &$pdo, $quoteId) {
		// Sanitize the ID before searching
		try {
			$quoteId = Filter::filterInt($quoteId, "Quote ID");
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}

		// Create query template
		$query = "SELECT quoteId, quoteContent, quoteAttribution, quoteDate FROM quote WHERE quoteId = :quoteId";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the placeholders in the template
		$parameters = array("quoteId" => $quoteId);
		$statement->execute($parameters);

		// Grab the quote from MySQL
		try {
			$quote = null;
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$row = $statement->fetch();

			if($row !== false) {
				$quote = new Quote($row["quoteId"], $row["quoteContent"], $row["quoteAttribution"], $row["quoteDate"]);
			}
		} catch(Exception $exception) {
			// If the row cannot be converted, rethrow it
			throw new PDOException($exception->getMessage(), 0, $exception);
		}

		return $quote;
	}

	public static function getQuoteByQuoteDate(PDO &$pdo, $quoteDate) {
		// Filter the date, and then turn it into a string
		try {
			$quoteDate = Filter::filterDate($quoteDate, "Quote date");
			$quoteDate = $quoteDate->format("Y-m-d H:i:s");
		} catch(RangeException $range) {
			// Rethrow the exception to the caller
			throw new RangeException($range->getMessage(), 0, $range);
		} catch(InvalidArgumentException $invalidArgument) {
			// Rethrow the exception to the caller
			throw new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument);
		} catch(Exception $exception) {
			// Rethrow the exception to the caller
			throw new Exception($exception->getMessage(), 0, $exception);
		}

		// Create query template
		$query = "SELECT quoteId, quoteContent, quoteAttribution, quoteDate FROM quote WHERE quoteDate = :quoteDate";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the placeholders in the template
		$parameters = array("quoteDate" => $quoteDate);
		$statement->execute($parameters);

		// Grab the quote from MySQL
		try {
			$quote = null;
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$row = $statement->fetch();

			if($row !== false) {
				$quote = new Quote($row["quoteId"], $row["quoteContent"], $row["quoteAttribution"], $row["quoteDate"]);
			}
		} catch(Exception $exception) {
			// If the row cannot be converted, rethrow it
			throw new PDOException($exception->getMessage(), 0, $exception);
		}

		return $quote;
	}

	public static function getAllQuotes(PDO &$pdo) {
		// Create query template
		$query = "SELECT quoteId, quoteContent, quoteAttribution, quoteDate FROM quote";
		$statement = $pdo->prepare($query);
		$statement->execute();

		// Build an array of quotes
		$quotes = new SplFixedArray($statement->rowCount());
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$quote = new Quote($row["quoteId"], $row["quoteContent"], $row["quoteAttribution"], $row["quoteDate"]);
				$quotes[$quotes->key()] = $quote;
				$quotes->next();
			} catch(Exception $exception) {
				// If the row cannot be converted, rethrow it
				throw new PDOException($exception->getMessage(), 0, $exception);
			}
		}

		return $quotes;
	}

}