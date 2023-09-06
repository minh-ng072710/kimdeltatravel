<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting;

class ReportRequest extends \Google\Site_Kit_Dependencies\Google\Collection
{
    protected $collection_key = 'segments';
    protected $cohortGroupType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\CohortGroup::class;
    protected $cohortGroupDataType = '';
    protected $dateRangesType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\DateRange::class;
    protected $dateRangesDataType = 'array';
    protected $dimensionFilterClausesType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\DimensionFilterClause::class;
    protected $dimensionFilterClausesDataType = 'array';
    protected $dimensionsType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\Dimension::class;
    protected $dimensionsDataType = 'array';
    /**
     * @var string
     */
    public $filtersExpression;
    /**
     * @var bool
     */
    public $hideTotals;
    /**
     * @var bool
     */
    public $hideValueRanges;
    /**
     * @var bool
     */
    public $includeEmptyRows;
    protected $metricFilterClausesType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\MetricFilterClause::class;
    protected $metricFilterClausesDataType = 'array';
    protected $metricsType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\Metric::class;
    protected $metricsDataType = 'array';
    protected $orderBysType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\OrderBy::class;
    protected $orderBysDataType = 'array';
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $pageToken;
    protected $pivotsType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\Pivot::class;
    protected $pivotsDataType = 'array';
    /**
     * @var string
     */
    public $samplingLevel;
    protected $segmentsType = \Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\Segment::class;
    protected $segmentsDataType = 'array';
    /**
     * @var string
     */
    public $viewId;
    /**
     * @param CohortGroup
     */
    public function setCohortGroup(\Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\CohortGroup $cohortGroup)
    {
        $this->cohortGroup = $cohortGroup;
    }
    /**
     * @return CohortGroup
     */
    public function getCohortGroup()
    {
        return $this->cohortGroup;
    }
    /**
     * @param DateRange[]
     */
    public function setDateRanges($dateRanges)
    {
        $this->dateRanges = $dateRanges;
    }
    /**
     * @return DateRange[]
     */
    public function getDateRanges()
    {
        return $this->dateRanges;
    }
    /**
     * @param DimensionFilterClause[]
     */
    public function setDimensionFilterClauses($dimensionFilterClauses)
    {
        $this->dimensionFilterClauses = $dimensionFilterClauses;
    }
    /**
     * @return DimensionFilterClause[]
     */
    public function getDimensionFilterClauses()
    {
        return $this->dimensionFilterClauses;
    }
    /**
     * @param Dimension[]
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
    /**
     * @return Dimension[]
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * @param string
     */
    public function setFiltersExpression($filtersExpression)
    {
        $this->filtersExpression = $filtersExpression;
    }
    /**
     * @return string
     */
    public function getFiltersExpression()
    {
        return $this->filtersExpression;
    }
    /**
     * @param bool
     */
    public function setHideTotals($hideTotals)
    {
        $this->hideTotals = $hideTotals;
    }
    /**
     * @return bool
     */
    public function getHideTotals()
    {
        return $this->hideTotals;
    }
    /**
     * @param bool
     */
    public function setHideValueRanges($hideValueRanges)
    {
        $this->hideValueRanges = $hideValueRanges;
    }
    /**
     * @return bool
     */
    public function getHideValueRanges()
    {
        return $this->hideValueRanges;
    }
    /**
     * @param bool
     */
    public function setIncludeEmptyRows($includeEmptyRows)
    {
        $this->includeEmptyRows = $includeEmptyRows;
    }
    /**
     * @return bool
     */
    public function getIncludeEmptyRows()
    {
        return $this->includeEmptyRows;
    }
    /**
     * @param MetricFilterClause[]
     */
    public function setMetricFilterClauses($metricFilterClauses)
    {
        $this->metricFilterClauses = $metricFilterClauses;
    }
    /**
     * @return MetricFilterClause[]
     */
    public function getMetricFilterClauses()
    {
        return $this->metricFilterClauses;
    }
    /**
     * @param Metric[]
     */
    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
    }
    /**
     * @return Metric[]
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * @param OrderBy[]
     */
    public function setOrderBys($orderBys)
    {
        $this->orderBys = $orderBys;
    }
    /**
     * @return OrderBy[]
     */
    public function getOrderBys()
    {
        return $this->orderBys;
    }
    /**
     * @param int
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }
    /**
     * @param string
     */
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    /**
     * @return string
     */
    public function getPageToken()
    {
        return $this->pageToken;
    }
    /**
     * @param Pivot[]
     */
    public function setPivots($pivots)
    {
        $this->pivots = $pivots;
    }
    /**
     * @return Pivot[]
     */
    public function getPivots()
    {
        return $this->pivots;
    }
    /**
     * @param string
     */
    public function setSamplingLevel($samplingLevel)
    {
        $this->samplingLevel = $samplingLevel;
    }
    /**
     * @return string
     */
    public function getSamplingLevel()
    {
        return $this->samplingLevel;
    }
    /**
     * @param Segment[]
     */
    public function setSegments($segments)
    {
        $this->segments = $segments;
    }
    /**
     * @return Segment[]
     */
    public function getSegments()
    {
        return $this->segments;
    }
    /**
     * @param string
     */
    public function setViewId($viewId)
    {
        $this->viewId = $viewId;
    }
    /**
     * @return string
     */
    public function getViewId()
    {
        return $this->viewId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\AnalyticsReporting\ReportRequest::class, 'Google\\Site_Kit_Dependencies\\Google_Service_AnalyticsReporting_ReportRequest');
