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
	 * @param int $quoteId
	 */
	public function setQuoteId($quoteId) {
		$this->quoteId = Filter::filterInt($quoteId, "Quote ID", true);
	}

	/**
	 * @return string
	 */
	public function getQuoteContent() {
		return $this->quoteContent;
	}

	/**
	 * @param string $quoteContent
	 */
	public function setQuoteContent($quoteContent) {
		$this->quoteContent = Filter::filterString($quoteContent, "Quote content", 2048);
	}

	/**
	 * @return string
	 */
	public function getQuoteAttribution() {
		return $this->quoteAttribution;
	}

	/**
	 * @param string $quoteAttribution
	 */
	public function setQuoteAttribution($quoteAttribution) {
		$this->quoteAttribution = Filter::filterString($quoteAttribution, "Quote attribution", 256);
	}

	/**
	 * @return DateTime
	 */
	public function getQuoteDate() {
		return $this->quoteDate;
	}

	/**
	 * @param DateTime $quoteDate
	 */
	public function setQuoteDate($quoteDate) {
		$this->quoteDate = Filter::filterDate($quoteDate, "Quote date", true);
	}

}