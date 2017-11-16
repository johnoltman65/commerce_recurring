<?php

namespace Drupal\commerce_recurring;

use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Represents a single billing period.
 *
 * Examples:
 * - Oct 14th 14:56:20 - Nov 14th 14:56:20
 * - May 1st 00:00:00 - June 1st 00:00:00
 * - June 1st 00:00:00 - July 1st 00:00:00
 * Billing periods are contiguous and represent half-open ranges (the end date
 * is not included in the duration).
 *
 * @see http://wrschneider.github.io/2014/01/07/time-intervals-and-other-ranges-should.html
 * @see \Drupal\commerce_recurring\Plugin\Commerce\BillingSchedule\BillingScheduleInterface
 */
final class BillingPeriod {

  /**
   * The start date/time.
   *
   * @var \Drupal\Core\Datetime\DrupalDateTime
   */
  protected $startDate;

  /**
   * The end date/time.
   *
   * @var \Drupal\Core\Datetime\DrupalDateTime
   */
  protected $endDate;

  /**
   * Constructs a new BillingPeriod object.
   *
   * @param \Drupal\Core\Datetime\DrupalDateTime $start_date
   *   The start date.
   * @param \Drupal\Core\Datetime\DrupalDateTime $end_date
   *   The end date.
   */
  public function __construct(DrupalDateTime $start_date, DrupalDateTime $end_date) {
    $this->startDate = $start_date;
    $this->endDate = $end_date;
  }

  /**
   * Gets the start date/time.
   *
   * @return \Drupal\Core\Datetime\DrupalDateTime
   *   The start date/time.
   */
  public function getStartDate() {
    return $this->startDate;
  }

  /**
   * Gets the end date/time.
   *
   * @return \Drupal\Core\Datetime\DrupalDateTime
   *   The end date/time.
   */
  public function getEndDate() {
    return $this->endDate;
  }

}